@extends('frontend.layouts.app')
@section('title',"a progarmmer")
    @section('content')
        <div>
            <a href="{{route('post.create')}}" class="btn btn-primary">Create Post</a>
            <a href="/logout" class="btn btn-warning">logout</a>
            <h4 style="float: right">{{auth()->user()->name}}</h4>
        </div>
        @foreach ($posts as $post)
            <div class="card mt-4">
                <div class="card-header">
                    <h6>{{$post->title}}</h6>
                </div>
                <div class="card-body">
                    <p>{{$post->description}}</h2>
                    <div>
                        <a href="{{route('post.show',$post->id)}}" class="btn btn-success">View</a>
                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                        <a href=""  class="btn btn-danger" onclick="
                        event.preventDefault()
                        let con=confirm('Are You sure Want To Delete')
                        if(con){
                            let form=document.getElementById('delete-{{$post->id}}')
                            form.submit();
                        }
                        ">Delete</a>
                          <form action="{{route('post.destroy',$post->id)}}" method="POST" id="delete-{{$post->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
               
            </div>
        @endforeach
    @endsection
