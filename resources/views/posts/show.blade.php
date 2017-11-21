@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

    @include('posts.post')
    @include('posts.comments')
    
    <hr>
    
    @include('posts.comment')

    </div><!-- /.blog-main -->
    @include('layouts.aside')

@endsection
