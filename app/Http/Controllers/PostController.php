<?php

namespace App\Http\Controllers;

use App\Events\PostDeleteEvent;
use App\Models\Post;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Notifications\PostCreateNotifications;
use Illuminate\Support\Facades\Notification;


class PostController extends Controller
{
    public function index(){
        
        $posts=Post::where("user_id",auth()->user()->id)->orderBy("id","desc")->get();
        return view("home",compact("posts"));
    }
    public function create(){
        
        $categories=Category::all();
        
        return view("create",compact("categories"));
    }
    public function store(StoreRequest $request){
        $title="testing";
        $validated=$request->validated();
        $post=Post::create($validated+["user_id"=>auth()->user()->id]);
        event(new PostDeleteEvent($post));
        // email notifications
        // Notification::send(auth()->user(), new PostCreateNotifications($post)); 
        //database notifications
        //  Notification::send(auth()->user(), new PostCreateNotifications($post,$title));
        return redirect()->route("post.index")->with("create",config("flash.create.status"));
        }
    public function show(Post $post){
        // if($post->user_id!==auth()->user()->id){
        //     abort(403);
        // }
        $this->authorize("view",$post);
        return view("show",compact("post"));
    }
    public function edit(Post $post){
   
        $this->authorize("view",$post);
        $categories=Category::all();
        return view("edit",compact("post","categories"));
    }
    public function update(StoreRequest $request,Post $post){
        $validated=$request->validated();
        $post->update($validated);
        return redirect()->route("post.index");
    }
    public function destroy($id){
        
        $post=Post::findOrFail($id)->delete();
     
        return redirect()->route("post.index");
    }
}
