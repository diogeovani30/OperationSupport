<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Type;



class PostController extends Controller
{
    public function index()
    {

        $title = '  ';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        $title = '  ';
        if (request('type')) {
            $type = Type::firstWhere('slug', request('type'));
            $title = ' Progres ' . $type->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => " All Report" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'type', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Report",
            "active" => "posts",
            "post" => $post

        ]);
    }
}
