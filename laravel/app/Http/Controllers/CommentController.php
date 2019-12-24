<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::latest()->get();
        //$about=App\About::paginate(2);
        return view('pages.comments.comments', ['comments' => $comments]);
    }
    public function store(Request $request)
    {
        // request()->validate([
        //     'text' => 'required'
        // ]);
        $comment = new Comment();
        if (Auth::user() != null) {
            $comment->user_id = Auth::user()->id;
        } else {
            $comment->user_id = 1;
        }
        $comment->text = request('text');
        $comment->created_at = now('Asia/Novosibirsk');
        $comment->save();
        session()->put('commentId', $comment->id);

        // $input = $request->all();
        // \Log::info($input);
        // return response()->json(['success'=>'Получилось!']);
         return redirect(route('comments'));
    }
    public function edit(Comment $comment)
    {
        if (session()->get('commentId')==$comment->id) {
            return view('pages.comments.edit', ['comment'=>$comment]);
        }
        else{
            return abort(404);
        }
    }
    public function update(Comment $comment)
    {
        if (Auth::user() != null) {
            $comment->user_id = Auth::user()->id;
        } else {
            $comment->user_id = 1;
        }
        $comment->text = request('text');
        $comment->updated_at = now('Asia/Novosibirsk');
        $comment->save();

        return redirect(route('comments'));
    }
    public function delete(Comment $comment)
    {
        $comment->delete();
        return redirect(route('comments'));
    }
}
