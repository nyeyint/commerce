<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Components\Blog\BlogRepository;

class BlogController extends Controller
{
    //

    protected $blog;

    public function __construct(BlogRepository $blog)
    {
        $this->blog = $blog;
    }

    public function view($slug)
    {
        try {
            $post = $this->blog->getBySlug($slug);
        } catch (\Exception $e) {
            return abort(404);
        }

        return view('blog.view-post')->with('post', $post);
    }
}
