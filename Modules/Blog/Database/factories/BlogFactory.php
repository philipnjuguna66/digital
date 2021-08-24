<?php
namespace Modules\Blog\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Blog\Entities\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug(4),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(10,true),
            'featured_image' =>$this->faker->image,
            'published_at' => now(),
            'is_published' => true,
        ];
    }
}

