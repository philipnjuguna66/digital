<?php namespace Tests\Repositories;

use App\Models\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class BlogRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var BlogRepository
     */
    protected $blogRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->blogRepo = \App::make(BlogRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_blog()
    {
        $blog = Blog::factory()->make()->toArray();

        $createdBlog = $this->blogRepo->create($blog);

        $createdBlog = $createdBlog->toArray();
        $this->assertArrayHasKey('id', $createdBlog);
        $this->assertNotNull($createdBlog['id'], 'Created Blog must have id specified');
        $this->assertNotNull(Blog::find($createdBlog['id']), 'Blog with given id must be in DB');
        $this->assertModelData($blog, $createdBlog);
    }

    /**
     * @test read
     */
    public function test_read_blog()
    {
        $blog = Blog::factory()->create();

        $dbBlog = $this->blogRepo->find($blog->id);

        $dbBlog = $dbBlog->toArray();
        $this->assertModelData($blog->toArray(), $dbBlog);
    }

    /**
     * @test update
     */
    public function test_update_blog()
    {
        $blog = Blog::factory()->create();
        $fakeBlog = Blog::factory()->make()->toArray();

        $updatedBlog = $this->blogRepo->update($fakeBlog, $blog->id);

        $this->assertModelData($fakeBlog, $updatedBlog->toArray());
        $dbBlog = $this->blogRepo->find($blog->id);
        $this->assertModelData($fakeBlog, $dbBlog->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_blog()
    {
        $blog = Blog::factory()->create();

        $resp = $this->blogRepo->delete($blog->id);

        $this->assertTrue($resp);
        $this->assertNull(Blog::find($blog->id), 'Blog should not exist in DB');
    }
}
