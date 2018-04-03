<?php 

namespace App\Components\Blog;

use TCG\Voyager\Models\Post;

class BlogRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->all();
    }

    public function getBySlug($slug)
    {
        $blog = $this->post->where('slug', $slug)->first();

        if (!$blog) {
            throw new \Exception("Post by {$slug} does not exists on this repository");
        }

        return $blog;
    }

    public function get($count = 3)
    {
        return $this->post->take($count)->get();
    }
}
