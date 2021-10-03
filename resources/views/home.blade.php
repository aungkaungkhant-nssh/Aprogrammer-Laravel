@extends('layouts.app')
@section('title',"a progarmmer")
    @section('content')
        @foreach ($posts as $post)
            <div class="card mt-4">
                <div class="card-header">
                    <h6>{{$post->title}}</h6>
                </div>
                <div class="card-body">
                
                    
                    <p>{{$post->description}}</h2>
                </div>
            </div>
        @endforeach
    @endsection
