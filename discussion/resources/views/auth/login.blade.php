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

  <!--Bootstrap-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}

body{
  background-color: #E7E6F3;
}

.row {
  margin: 0 auto;
}

/* Create two equal columns that sits next to each other */
.column1 {
  margin: 60px 0 0 0;
  padding: 10px;
  line-height: 475px; /*Should be removed. Only for demonstration */
  border: 2px #424473;
  border-radius: 15px 0 0 15px;
  text-align: center;
}

.column2 {
  margin: 60px 0 0 0;
  padding: 100px 10px 0 10px;
  border: 2px #F4F6FB;
  border-radius: 0 15px 15px 0;
}

.lgnImage{
display:inline-block;
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
  width: 65%;
  padding: 8px 30px;
  margin: 20px 0 0 0;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 10px 10px 10px 10px;
  box-sizing: border-box;
  box-shadow:1px 1px 3px 1px rgba(1,1,1,0.2);
}

button {
  background-color: #5A5EAA;
  color: white;
  padding: 6px 0;
  margin: 8px 0;
  border: none;
  border-radius: 10px 10px 10px 10px;
  cursor: pointer;
  width: 60%;
  display:block;
  margin: 0 auto;
}

button:hover {
  opacity: 0.8;
}

.textField {
  padding: 10px 0 0 0;
  text-align: center;
}

.lgn {
  padding: 30px 0 0 0;
  width: 60%;
  display:block;
  margin: 0 auto;
}

/*Remember or forget password*/
/*.reminder{
  padding: 20px 20px 25px 20px;
}

span.psw {
  float: right;
}*/

/* Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }  
}*/
</style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="column1 col-6" style="background-color:#424473;">
      <img src="/images/login.png" class="lgnImage">
    </div>

    <div class="column2 col-6" style="background-color:#F4F6FB;">
      <h2 class="welcome">Hello Again!</h2>
      <p class="welcome">Welcome back you've been missed!</p>
    
      <form action="/action_page.php" method="post">

    <div class="textField">
      <input type="text" placeholder="Enter Username" name="uname" required>

      <input type="password" placeholder="Enter Password" name="psw" required>   
    </div>
   
    <!--<div class ="reminder">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    
      <span class="psw">Recovery <a href="#">password?</a></span>
    </div>-->
   
    <div class="lgn">
      <button type="submit">Login</button>
    </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>