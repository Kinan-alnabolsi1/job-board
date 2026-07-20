<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        //Eloquent ORM to get all the data from the post table in the database
        // $data= Post::all();
        // $data = Post::paginate(5); //paginate the data to 5 posts per page
        // $data = Post::simplePaginate(5); //paginate the data to 5 posts per page with simple pagination (no page numbers)
           $data = Post::cursorPaginate(5); //paginate the data to 5 posts per page with cursor pagination hashing page number in url query string (no page numbers)
        //Pass the data to the view
        return view('post.index', ['posts' => $data , 'PageTitle'=> 'Blog Page']);
    }

    public function show($id){
        //Eloquent ORM to get the data from the post table in the database by id
        $post = Post::findOrFail($id);

        //handle null response if the post is not found
        // if(!$post){
        //     abort(404);
        // }

        //Pass the data to the view
        return view('post.show', ['post' => $post , 'PageTitle' => $post->title]);
    }

    public function create() {
    //  Post::create([
    //     'title' => 'New Post find',
    //     'author' => 'Kinan alnabolsi asd',
    //     'body' => 'This is a new post',
    //     'published' => true,
    //  ]);

    Post::factory(100)->create(); //create 100 posts using the factory

     return redirect("./blog");
    }

    public function delete() {
        Post::destroy(2);
    }

}
