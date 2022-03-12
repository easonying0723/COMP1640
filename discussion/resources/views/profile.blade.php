@extends ('layouts/sidebar')

@section('title', 'Profile')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Link css file -->
<link href="{{ URL::asset('css/profile.css') }}" rel="stylesheet">

<!-- Icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<!-- Bootstrap 5 -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
@section('profilecontent')
<!--<h2 class="title">Profile Setting</h2>-->
<div class="empty">
<form class="profileForm" action="/action_page.php" method="post">
  <div class="container">
    <!-- Trigger/Open The Modal -->
    <button id="passwordBtn" class="pswBtn" onclick="document.location='default.asp'">Change password <span class="iconify" data-icon="akar-icons:key"></span> </button>
    <p class="userid">UserID: UID001</p>
  </div>

  <div class="imgcontainer">
  <img src="/images/profile3.png" class="avatar">
  </div>
  
  <div>
    <p id="profileName" class="name">SCPG1700562</p>
  </div>

  <div class="small-middle-container">
  <div class="row">
    <div class="col ">
    <label for="uname" class="leftsection"><b>First Name:</b></label><br>
    <input type="text" name="fname" >
    </div>
    <div class="col ">
      <label for="lname" class="rightsection"><b>Last Name:</b></label><br>
      <input type="text" name="lname"></td>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="email" class="leftsection"><b>Email:</b></label><br>
      <input type="text" name="email" >
    </div>
    <div class="col">
    <label for="contact" class="rightsection"><b>Contact:</b></label><br>
      <input type="text" name="contact" class="rightsection">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <label for="department" class="leftsection"><b>Department:</b></label><br>
    <input type="text" name="department" class="leftsection" style="background-color: #E6E6E5">
    </div>
    <div class="col">
    <label for="position" class="rightsection"><b>Position:</b></label><br>
    <input type="text" name="position" class ="rightsection" style="background-color: #E6E6E5">
    </div>
  </div>
</div>

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

        <table boarder="0" cellpadding="10" cellspacing="0" width="500" text-align="center" class="tblSaveForm">
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
@endsection
</body>
</html>
