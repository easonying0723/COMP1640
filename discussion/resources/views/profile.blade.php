<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
.empty{
  background-color: #D1D4E3;
  padding: 35px;
}

body{
  background-color: white;
}

h2{
  text-align: right;
}

form {
border: 30px solid #F4F6FB;
background-color: #F4F6FB;
border-radius: 10px;
box-shadow:1px 1px 3px 1px rgba(1,1,1,0.2);
padding: 5px;
}

table {
  border-collapse: collapse;
  margin: 0 auto;
}

td, th {
  text-align: left;
  padding: 10px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 10px 100px;
  margin: 10px 0;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 5px 5px 5px 5px;
  box-sizing: border-box;
}

button:hover {
  opacity: 0.8;
}

.psw{
  background-color: #C1AEC3;
  color: #3C3541;
  padding: 10px 10px;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
}

.userid{
  float: right;
  margin-top: 0px;
}

.name{
  text-align: center;
}

.imgcontainer {
  display: flex; /* or display:grid */
  justify-content: center;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.submit {
  background-color: #424473;
  color: white;
  padding: 10px 90px;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}

.update{
  background-color: #F4F6FB;
  margin: 5px 0 30px 0;
}

</style>
</head>
<body>

<h2>Profile Setting</h2>
<div class="empty">
<form action="/action_page.php" method="post">
<div class="container">
    <button class="psw" onclick="document.location='default.asp'">Change password</button>
    <p class="userid">UserID: UID001</p>
  </div>

  <div class="imgcontainer">
  <img src="/images/profile.png" class="avatar">
  </div>
  
  <div>
    <p id="profileName" class="name">SCPG1700562</p>
  </div>

<table>
  <tr>
    <td><label for="uname" class="leftsection"><b>First Name:</b></label><br>
      <input type="text" name="fname" class="leftsection" required></td>
    <td><label for="lname" class="rightsection"><b>Last Name:</b></label><br>
      <input type="text" name="lname" class="rightsection" required></td>
  </tr>
  <tr>
    <td><label for="email" class="leftsection"><b>Email:</b></label><br>
      <input type="text" name="email" class="leftsection" required></td>
    <td><label for="contact" class="rightsection"><b>Contact:</b></label><br>
      <input type="text" name="contact" class="rightsection" required></td>
  </tr>
  <tr>
    <td><label for="department" class="leftsection"><b>Department:</b></label><br>
    <input type="text" name="department" class="leftsection" style="background-color: #E6E6E5" required></td>
    <td><label for="position" class="rightsection"><b>Position:</b></label><br>
    <input type="text" name="position" class ="rightsection" style="background-color: #E6E6E5" required></td>
  </tr>
</table>

<div class="update">
  <button type="submit" class="submit">Update</button>
</div>

</form>
</div>
</body>
</html>
