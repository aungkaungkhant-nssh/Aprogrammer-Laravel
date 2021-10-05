<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::orderBy("id","desc")->get();
        return view("home",compact("posts"));
    }
    public function create(){
        $categories=Category::all();
        return view("create",compact("categories"));
    }
    public function store(StoreRequest $request){
        $validated=$request->validated();
        Post::create($validated);
        return redirect()->route("post.index");
    }
    public function show(Post $post){
        return view("show",compact("post"));
    }
    public function edit(Post $post){
        $categories=Category::all();
        return view("edit",compact("post","categories"));
    }
    public function update(StoreRequest $request,Post $post){
        $validated=$request->validated();
        $post->update($validated);
        return redirect()->route("post.index");
    }
    public function destroy($id){
        
        Post::findOrFail($id)->delete();
        return redirect()->route("post.index");
    }
}
