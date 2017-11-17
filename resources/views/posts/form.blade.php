@include('layouts.errors')

<form method="POST" action="/posts">
  
  {{ csrf_field() }}
  
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title">  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Publish</button>
  </div>

</form> 

