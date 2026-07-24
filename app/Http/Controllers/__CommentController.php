<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class __CommentController extends Controller
{
    //
    public function index(){
        //Eloquent ORM to get all the data from the Comment table in the database
        $data = Comment::all();

        //Pass the data to the view
        return view('comment.index', ['comments' => $data , 'PageTitle'=> 'comment Page']);

        // $data = Comment::with('post')->get(); 
        // return response()->json($data);
    }

    public function create() {
    //  Comment::create([
    //     'author' => 'Kinan alnabolsi',
    //     'content' => 'This is a new Comment',
    //     'post_id' => 3,
    //  ]);

     Comment::factory(5)->create();

     return response(["message" => "successfully created 5 comments"],201);
    }

    
}
