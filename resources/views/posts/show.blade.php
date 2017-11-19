@extends('layouts.master')

@section('content')
    @include('posts.post')
    @include('posts.comments')
    
    <hr>
    
    @include('posts.comment')
@endsection
