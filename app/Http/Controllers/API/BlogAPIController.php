<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBlogAPIRequest;
use App\Http\Requests\API\UpdateBlogAPIRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class BlogController
 * @package App\Http\Controllers\API
 */

class BlogAPIController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     * GET|HEAD /blogs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(BlogResource::collection($blogs), 'Blogs retrieved successfully');
    }

    /**
     * Store a newly created Blog in storage.
     * POST /blogs
     *
     * @param CreateBlogAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogAPIRequest $request)
    {
        $input = $request->all();

        $blog = $this->blogRepository->create($input);

        return $this->sendResponse($blog->toArray(), 'Blog saved successfully');
    }

    /**
     * Display the specified Blog.
     * GET|HEAD /blogs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Blog $blog */
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            return $this->sendError('Blog not found');
        }

        return $this->sendResponse($blog->toArray(), 'Blog retrieved successfully');
    }

    /**
     * Update the specified Blog in storage.
     * PUT/PATCH /blogs/{id}
     *
     * @param int $id
     * @param UpdateBlogAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogAPIRequest $request)
    {
        $input = $request->all();

        /** @var Blog $blog */
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            return $this->sendError('Blog not found');
        }

        $blog = $this->blogRepository->update($input, $id);

        return $this->sendResponse($blog->toArray(), 'Blog updated successfully');
    }

    /**
     * Remove the specified Blog from storage.
     * DELETE /blogs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Blog $blog */
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            return $this->sendError('Blog not found');
        }

        $blog->delete();

        return $this->sendSuccess('Blog deleted successfully');
    }
}
