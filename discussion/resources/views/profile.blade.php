<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
background-color: white;
}

form {
border: 3px solid #D1D4E3;
background-color: #F4F6FB;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #424473;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  display: flex; /* or display:grid */
  justify-content: center;
  margin: 10px 0 10px 125px;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  background-color:#F4F6FB
}

.userid{
  float: right;
}

.name{
  text-align: center;
}

span.psw {
  margin: 50px 0 0 0;
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

<h2>Profile Settings</h2>

<form action="/action_page.php" method="post">

  <div class="container">
    <span class="psw">Change <a href="#">password?</a></span>
    <p class="userid">UserID: UID001</p>
  </div>

  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  
  <div>
    <p id="profileName" class="name">SCPG1700562</p>
  </div>
  
  <div class="container">
    <label for="uname"><b>First Name:</b></label>
    <input type="text" name="fname" required>
    
    <label for="lname"><b>Last Name:</b></label>
    <input type="text" name="lname" required>
    
    <label for="email"><b>Email:</b></label>
    <input type="text" name="email" required>
    
    <label for="contact"><b>Contact:</b></label>
    <input type="text" name="contact" required>
    
    <label for="department"><b>Department:</b></label>
    <input type="text" name="department" required>
    
    <label for="position"><b>Position:</b></label>
    <input type="text" name="position" required>
    
    <button type="submit">Update</button>
  </div>
</form>

</body>
</html>