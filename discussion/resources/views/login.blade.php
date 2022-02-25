<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column1 {
  flex: 50%;
  padding: 10px;
  height: 500px; /* Should be removed. Only for demonstration */
  margin: 5% auto 5% 5%;
  border: 2px #424473;
  border-radius: 15px 0 0 15px;
}

.column2 {
  flex: 50%;
  padding: 50px 30px 50px 30px;
  margin: 5% 5% 5% auto;
  border: 2px #F4F6FB;
  border-radius: 0 15px 15px 0;
}

.loginpage{
  background-color: #E7E6F3;
}

.lgnImage{
display:block;
margin: 50px auto;
width:300px;
height:350px;
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
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 15px 15px 15px 15px;
  box-sizing: border-box;
  box-shadow:1px 1px 5px 1px rgba(1,1,1,0.2);
}

button {
  background-color: #5A5EAA;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 15px 15px 15px 15px;
  cursor: pointer;
  width: 100%;
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
  padding: 0 0px 0 0px;
}
  
.lgn {
  padding: 30px 10px 30px 10px;
  width: 90%;
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

<div class="loginpage">
  <div class="row">
    <div class="column1" style="background-color:#424473;">
      <img src="/images/login.png" class="lgnImage">
    </div>

    <div class="column2" style="background-color:#F4F6FB;">
      <h2 class="welcome">Hello Again!</h2>
      <p class="welcome">Welcome back you've been missed!</p>
    
      <form action="/action_page.php" method="post">

    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname" required>

      <input type="password" placeholder="Enter Password" name="psw" required>   
    </div>
   
    <div class ="reminder">
      <label>
        <br><input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
   
    <div class="lgn">
      <button type="submit">Login</button>
    </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
