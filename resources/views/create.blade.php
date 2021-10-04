@extends('layouts.app')
@section('title',"a progarmmer")
    @section('content')
        <div>
            <a href="{{route('post.index')}}">Back</a>
        </div>
         <div class="card">

             <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                 <form action="{{route('post.store')}}" method="POST">
                    @csrf
                     <div class="form-group">
                         <label for="">Title</label>
                         <input type="text" name="title" class="form-control" value="{{old('title')}}">
                     </div>
                     <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" value="{{old('description')}}">
                     </div>
                     <div>
                         <input type="submit" class="btn btn-primary">
                     </div>
                 </form>
             </div>
         </div>
    @endsection
