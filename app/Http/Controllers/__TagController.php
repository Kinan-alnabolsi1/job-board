<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class __TagController extends Controller
{
    //
    public function index(){
        //Eloquent ORM to get all the data from the tag table in the database
        $data = Tag::all();

        //Pass the data to the view
        return view('tag.index', ['tags' => $data , 'PageTitle'=> 'Tag Page']);
    }

    public function create() {
     Tag::create([
        'title' => 'software engineering',
     ]);
    
     return response(["message" => "successfully created tag"],201);
    }

    public function testManyToMany() {
        $post4 = Post::find(4);

        $post4->tags()->attach([2]); // attach tags with id 2 to post with id 4

        return response()->json([
            'post4' => $post4->tags,
        ]
        );
        
        // $tag = Tag::find(2);

        // $tag->posts()->attach([3]);
        
        // return response()->json([
        //     'tag' => $tag->title,
        //     'posts' => $tag->posts
        // ]);
    }
}
