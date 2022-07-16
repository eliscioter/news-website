<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class CommentProfile extends Controller
{
    public function commentList(Request $request) {

        $validator = Validator::make($request->all(),[
            'subject' => 'required|string',
            'comment_body' => 'required|string'
        ]);
        
        Comment::create([
            'username' => Auth::user()->username,
            'subject' => $request->subject,
            'comment_body' => $request->comment_body
        ]);

        return redirect('/feedback')->with('message', 'successful');
    }
}
