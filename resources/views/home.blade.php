<!DOCTYPE html>
<html>
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}"> --}}

<head>
  <title></title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               @foreach ($post as $arr)

               <div style="margin-left: 20px"><p style="color: blue"><a href="{{url('/viewpost/'.$arr['id'])}}"><?php echo $arr['tag']?></a></p></div> 
               <div style="margin-left: 20px"><p style="color: red;font-size:10px"><?php echo $arr['created_at']?></p></div>
                
           @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
