
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
      <div style="margin-left: 20px"  class="panel-heading"><p style="color: blue"><a href=""><?php echo $viewpost['tag']?></a></p></div> 
        <div class="panel-body">
          <div style="margin-left: 20px"><p ><?php echo $viewpost['catalog']?></p></div>
          <div style="margin-left: 20px"><p ><?php echo $viewpost['content']?></p></div>
          <div style="margin-left: 20px"><p style="color: green">
          <?php
              if($viewpost['status']=='0'){ echo "Public";}
              else{echo "Unpublic";}
          ?>
          </p></div>
          <div style="margin-left: 20px"><p style="color: red"><?php echo $viewpost['created_at']?></p></div>
          
        </div>
        </div>
    </div>

</body>
</html>
