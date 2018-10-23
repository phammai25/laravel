<!DOCTYPE html>
<html>
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}"> --}}

<head>
  <title></title>
</head>
<body>
@extends('adminhome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               @foreach ($user as $arr)

               <div style="margin-left: 20px"><p style="color: blue"><a href="{{url('/admin/viewprofile/'.$arr['id'])}}">NAME: <?php echo $arr['name']?></a></p></div> 
               <div style="margin-left: 20px"><p style="color: red">EMAIL:  <?php echo $arr['email']?></p></div>
                <div style="margin-left: 20px"><p style="color: red">CREATED_AT:  <?php echo $arr['created_at']?></p></div>
           @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
