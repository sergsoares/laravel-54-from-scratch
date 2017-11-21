@extends('layouts.master')

@section('content')
<form method="POST" action="/login">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email" >Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password" >Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form>

    @include('layouts.errors')
    
@endsection
