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
            $title = ' Proses ' . $type->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "Laporan Aktivitas" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'type', 'author']))->paginate(15)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Laporan Detail",
            "active" => "posts",
            "post" => $post

        ]);
    }

    public function generatelaporan($id)
    {
        // Find the post by ID
        $post = Post::find($id);
        // dd($posts);

        if (!$post) {
            // Handle the case when the post with the given ID is not found
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }

        $title = 'Cetak Laporan';

        // Return the view with the post data
        return view('user.cetaklaporan', compact('post', 'title'));
    }
}
