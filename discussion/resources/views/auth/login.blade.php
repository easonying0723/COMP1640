<?php


 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- All format -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
* {
  box-sizing: border-box;
}

body{
  background-color: #E7E6F3;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column1 {
  flex: 50%;
  padding: 10px;
  height: 475px; /* Should be removed. Only for demonstration */
  margin: 4.5% auto 4.5% 15%;
  border: 2px #424473;
  border-radius: 15px 0 0 15px;
}

.column2 {
  flex: 50%;
  padding: 50px 30px 50px 30px;
  margin: 4.5% 15% 4.5% auto;
  border: 2px #F4F6FB;
  border-radius: 0 15px 15px 0;
}

.lgnImage {
display:block;
margin: 80px auto;
width:300px;
height:310px;
}

/*Welcome text*/
.welcome{
  text-align: center;
}

form {
background-color: #F4F6FB;
}

input[type=text], input[type=password] {
  width: 90%;
  padding: 15px 30px;
  margin: 10px 0;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 10px 10px 10px 10px;
  box-sizing: border-box;
  box-shadow:1px 1px 3px 1px rgba(1,1,1,0.2);
}

button {
  background-color: #5A5EAA;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 10px 10px 10px 10px;
  cursor: pointer;
  width: 80%;
  display:block;
  margin: 0 auto;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 10px 0 0 0;
  text-align: center;
}

/*Remember or forget password*/
.reminder{
  padding: 5px 20px 25px 20px;
}
  
.lgn {
  padding: 30px 10px 30px 10px;
  width: 80%;
  display:block;
  margin: 0 auto;
}

span.psw {
  float: right;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }  
}
</style>
</head>
<body>
  <div class="row">
    <div class="column1" style="background-color:#424473;">
      <img src="/images/login.png" class="lgnImage">
    </div>

    <div class="column2" style="background-color:#F4F6FB;">
      <h2 class="welcome">Hello Again!</h2>
      <p class="welcome">Welcome back you've been missed!</p>
    
      <form action="{{ route('auth.check') }}" method="post">
    @csrf
    <div class="container">
      <div class="form-group">
        <input type="text" placeholder="Enter Username" name="uname" required>
        <span class="text-danger">
          
        </span>
      </div>

      <div class="form-group">
        <input type="password" placeholder="Enter Password" name="password" required> 
      </div>  
    </div>
   
    <div class ="reminder">
      <!-- <label>
        <br><input type="checkbox" checked="checked" name="remember"> Remember me
      </label> -->
    
      <span class="psw">Recovery <a href="#">password?</a></span>
    </div>
   
    <div class="lgn">
      <button type="submit">Login</button>
    </div>
      </form>
    </div>
  </div>

</body>
</html>
