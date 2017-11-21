@extends('layouts.master')

@section('content')
    
    <div class="col-sm-8 blog-main">

    <h2>Publish a post.</h2>    
    <hr>
        @include('posts.form')

    </div><!-- /.blog-main -->
    @include('layouts.aside')

@endsection