<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>BLOG</title>
</head>
<body>

<div class="container">
  <h2>Create Post</h2>
  <form class="form-horizontal" action="http://127.0.0.1:8000/savepost" name="myform" id="form1" method="POST" >
  	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label class="control-label col-sm-2" for="tag">Tag</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tag"  name="tag">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="catalog">Catalog:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="catalog"  name="catalog">
      </div>
    </div>
   	<div class="form-group">
      <label class="control-label col-sm-2" for="content">Content</label>
       <div class="col-sm-10">   
      <textarea class="form-control" rows="5" id="content" name="content"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="save" >Submit</button>
      </div>
    </div>
  </form>
</div>

{{--  --}}
</body>
</html>

