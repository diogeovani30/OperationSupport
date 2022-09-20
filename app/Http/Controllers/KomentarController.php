<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        //         $comment = new Komentar();
        //         $comment->body = $request->get('comment_body');
        //         $comment->user()->associate($request->user());
        //         $post = Post::find($request->get('post_id'));
        //         $post->comments()->save($comment);

        //         return back();
        //     }

        //     public function replyStore(Request $request)
        //     {
        //         $reply = new Komentar();
        //         $reply->body = $request->get('comment_body');
        //         $reply->user()->associate($request->user());
        //         $reply->parent_id = $request->get('comment_id');
        //         $post = Post::find($request->get('post_id'));

        //         $post->comments()->save($reply);

        //         return back();
        //     }
        // }
    }
}
