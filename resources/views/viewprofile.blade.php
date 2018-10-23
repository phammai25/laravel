<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">
<head>
  <title></title>
</head>
<meta charset="utf-8">
<body>
<div class="container">
	<div class="panel panel-default">
        <div style="margin-left: 20px" class="panel-heading"><p style="color: blue"><a href=""><?php echo'NAME:'; echo $user['name']?></a></p></div> 
        <div class="panel-body">
              <div style="margin-left: 20px"><p ><?php echo'EMAIL:'; echo $user['email']?></p></div>
              <div style="margin-left: 20px"><p ><?php echo'PASS:';  echo $user['password']?></p></div>
              <div style="margin-left: 20px"><p style="color: green"></p></div>
              <div style="margin-left: 20px"><p style="color: red"><?php echo 'CREATED_AT:'; echo $user['created_at']?></p></div>
              <button><a href="{{url('/admin/deleteuser/'.$user['id'])}}" >DELETE</button>
              
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
