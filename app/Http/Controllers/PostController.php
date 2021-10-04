<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view("home",compact("posts"));
    }
    public function create(){
        return view("create");
    }
    public function store(StoreRequest $request){
        Post::create([
            "title"=>$request->title,
            "description"=>$request->description
        ]);
        return redirect()->route("post.index");
    }
    public function show(Post $post){
       
        return view("show",compact("post"));
    }
    public function edit(Post $post){
        return view("edit",compact("post"));
    }
    public function update(StoreRequest $request,Post $post){
        $post->update([
            "title"=>$request->title,
            "description"=>$request->description
        ]);
        return redirect()->route("post.index");
    }
    public function destroy($id){
        
        Post::findOrFail($id)->delete();
        return redirect()->route("post.index");
    }
}
