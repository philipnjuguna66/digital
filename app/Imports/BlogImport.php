<?php

namespace App\Imports;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Modules\Blog\Entities\Blog;

class BlogImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        if (isset($row['post_type']) && $row['post_type'] == 'post' &&  isset($row['post_title']) &&   $row['post_status'] != 'draft') {

            DB::transaction(function () use ( $row) {
                return new Blog([
                    'title' => $row['post_title'],
                    'meta_title' => $row['post_title'],
                    'meta_description' => Str::limit(! is_null($row['post_excerpt']) ? $row['post_excerpt'] : $row['post_name'], 180, ''),
                    'content' => $row['post_content'],
                    'is_published' => true,
                    'slug' => Str::slug(Str::limit($row['post_name'], 60, ''), '-'),
                    'featured_image' => null,
                    'published_at' => Carbon::parse($row['post_modified'])
                ]);
            });
        }

    }
}
