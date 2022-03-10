<!--<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #F4F6FB;
  margin: auto;
  padding: 10px 20px 10px 20px;
  width: 50%;
  border: none;
  border-radius: 8px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

h2{
  color: black;
}

input[type=password] {
  padding: 10px 100px;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 5px 5px 5px 5px;
  box-sizing: border-box;
}

.passform{
 margin: 30px 130px;
}

.update{
  background-color: #F4F6FB;
  margin: 5px 0 50px 0;
}

.submit{
  background-color: #424473;
  color: white;
  padding: 10px 50px;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}

.cancel{
  background-color: #F4F7FF;
  color: #424473;
  padding: 10px 50px ;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}
</style>
</head>
<body>

<h2>Modal Example</h2>-->

<!--*Trigger/Open The Modal-->
<!--<button id="myBtn">Open Modal</button>-->

<!-- *The Modal -->
<!-- <div id="myModal" class="modal">-->

  <!-- *Modal content -->
  <!--<div class="modal-content">
    <span class="close">&times;</span>
      <h2>Change Password</h2>
      <hr>
      <form class="passform" name="frmChange" method="post" action="" onSubmit="return validatePassword()">
        <div style="width:500px;">
        <div class="message"><//?php if(isset($message)) { echo $message; } ?>
        </div>

        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
          <tr>
            <td><label>Current Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
          </tr>

          <tr>
             <td><label>New Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
          </tr>

          <tr>
            <td><label>Confirm Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span>               </td>
          </tr>
        </table>
       </div>
     </form>

     <hr>

       <div class="update">
         <input type="submit" name="submit" value="Submit" class="submit">
         <input type="submit" name="cancel" value="Cancel" class="cancel">
       </div>
     </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<style>
.empty{
  background-color: #D1D4E3;
  padding: 35px;
}

body{
  background-color: white;
}

h2.title{
  text-align: right;
}

form.profileForm {
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
  padding: 10px 100px;
  margin: 5px 0;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 5px 5px 5px 5px;
  box-sizing: border-box;
}

button:hover {
  opacity: 0.8;
}

.pswBtn{
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

.submitProfile {
  background-color: #424473;
  color: white;
  padding: 10px 90px;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}

.updateProfile{
  background-color: #F4F6FB;
  margin: 5px 0 30px 0;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #F4F6FB;
  margin: auto;
  padding: 10px 20px 10px 20px;
  width: 50%;
  border: none;
  border-radius: 8px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

h2{
  color: black;
}

input[type=password] {
  padding: 10px 50px;
  display: inline-block;
  border: 1px #ffff;
  border-radius: 5px 5px 5px 5px;
  box-sizing: border-box;
}

.passform{
 margin: 30px 200px;
}

.updatePassword{
  background-color: #F4F6FB;
  margin: 5px 0 50px 0;
}

.submitPassword{
  background-color: #424473;
  color: white;
  padding: 10px 50px;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}

.cancelPassword{
  background-color: #F4F7FF;
  color: #424473;
  padding: 10px 50px ;
  border: none;
  border-radius: 5px 5px 5px 5px;
  cursor: pointer;
  float: right;
}

</style>
</head>
<body>

<h2 class="title">Profile Setting</h2>
<div class="empty">
<form class="profileForm" action="/action_page.php" method="post">
<div class="container">
    <!-- Trigger/Open The Modal -->
    <button id="passwordBtn" class="pswBtn" onclick="document.location='default.asp'">Change password <span class="iconify" data-icon="akar-icons:key"></span> </button>
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

<div class="updateProfile">
  <button type="submit" class="submitProfile">Update</button>
</div>

</form>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
      <h2>Change Password</h2>
      <hr>
      <form class="passform" name="frmChange" method="post" action="" onSubmit="return validatePassword()">
        <div style="width:500px;">
        <div class="message"><?php if(isset($message)) { echo $message; } ?>
        </div>

        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
          <tr>
            <td><label>Current Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
          </tr>

          <tr>
             <td><label>New Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
          </tr>

          <tr>
            <td><label>Confirm Password:</label></td>
          </tr>

          <tr>
            <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span>               </td>
          </tr>
        </table>
       </div>
     </form>

     <hr>

       <div class="updatePassword">
         <input type="submit" name="submit" value="Submit" class="submitPassword">
         <input type="submit" name="cancel" value="Cancel" class="cancelPassword">
       </div>
     </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("passwordBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
