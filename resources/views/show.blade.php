@extends('layouts.app')
@section('title',"a progarmmer")
    @section('content')
        <div>
            <a href="{{route('post.index')}}">Back</a>
        </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h6>{{$post->title}}</h6>
                </div>
                <div class="card-body">
                    <p>{{$post->description}}</h2>
                    <p style="font-style:italic">Category : {{$post->category->name}}</p>
                </div>
               
            </div>
    @endsection