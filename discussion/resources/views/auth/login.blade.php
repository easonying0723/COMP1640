<?php


 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Link css file-->
  <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">

  <!-- All format -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <!--Bootstrap-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex aligns-items-center justify-content-center">
  <div class="row">
    <div class="column1 col-6" style="background-color:#424473;">
      <img src="/images/login.png" class="lgnImage">
    </div>

    <div class="column2 col-6" style="background-color:#F4F6FB;">
      <h2 class="welcome">Hello Again!</h2>
      <p class="welcome">Welcome back you've been missed!</p>
    
      <form action="{{ route('auth.check') }}" method="post">
      @if(Session::get('fail'))
        <div class="alert alert-danger">
           {{ Session::get('fail') }}
        </div>
      @endif
  
      @csrf
    <div class="textField">
      <div class="form-group">
      <input type="text" placeholder="Enter email" name="email" required><br>
      <span class="text-danger">@error('email'){{ $message }} @enderror</span>
      </div>

      <div class="form-group">
      <input type="password" placeholder="Enter Password" name="password" required><br> 
      <span class="text-danger">@error('password'){{ $message }} @enderror</span>
      </div>
    </div>
   
    <!--<div class ="reminder">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    
      <span class="psw">Recovery <a href="#">password?</a></span>
    </div>-->
   
    <div class="d-flex aligns-items-center justify-content-center">
      <button class="lgn" type="submit">Login</button>
    </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>