@extends('layouts.app')
@section('title',"a progarmmer")
    @section('content')
        <div>
            <a href="{{route('post.index')}}">Back</a>
        </div>
         <div class="card">
             <div class="card-body">
                 <form action="{{route('post.store')}}" method="POST">
                    @csrf
                     <div class="form-group">
                         <label for="">Title</label>
                         <input type="text" name="title" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control">
                     </div>
                     <div>
                         <input type="submit" class="btn btn-primary">
                     </div>
                 </form>
             </div>
         </div>
    @endsection
