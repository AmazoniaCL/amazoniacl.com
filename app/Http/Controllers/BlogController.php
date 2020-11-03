<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog\Post;
use App\Models\Blog\Author;
use App\Models\Blog\Comment;
use App\Models\Blog\Media_post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::orderBy('fecha', 'desc')->paginate(15);

        return view('blog.index', ['posts' => $posts]);
    }

    public function post(Request $request) {
        $post = Post::where('slug', $request['post'])->with('media_posts')->with('comments')->with('author')->first();

        return view('blog.post', ['post' => $post]);
    }

    public function comentar(Request $request) {
        return Comment::create($request->all());
    }
}
