<form method="POST" action="/posts/{{$post->id}}/comments">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputPassword1">Create a Comment: </label>
            <textarea name="body" class="form-control"  cols="20" rows="3" required></textarea>
        </div>
    
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </form>

@include('layouts.errors')