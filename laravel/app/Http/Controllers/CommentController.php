<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        //$about=App\About::paginate(2);
        return view('pages.comments', ['comments' => $comments]);
    }
    public function store()
    {
        // request()->validate([
        //     'text' => 'required'
        // ]);
        $comment = new Comment();
        $comment->user_id = 1;
        $comment->text = request('text');
        $comment->created_at = now('Asia/Novosibirsk');
        $comment->save();
        return redirect(route('comments'));
    }
}
