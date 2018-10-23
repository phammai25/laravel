<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">
 <meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Styles -->
   <head>
	<title>BLOG</title>
</head>
<body>

<div class="container">
	@foreach ($post as $arr)
	<div class="well">
        <div class="media">
           <div class="media-body"><h4 class="media-heading" style="color: blue"><a href="{{url('/admin/publicpost/'.$arr['id'])}}"><?php echo $arr['tag']?></a></h4>
           	 <p class="text-right">
           	 <?php
                  if($arr['status']=='1'){ echo "Public";}
                  else{echo "Unpublic";}
              ?></p>
            <ul class="list-inline list-unstyled">
  			<li><span style="color: red"><i class="glyphicon glyphicon-calendar"></i> <?php echo $arr['created_at']?> </span></li>
            <li>|</li>
            
          </div>
        </div>
    </div>    
    @endforeach
   

</body>
</html>