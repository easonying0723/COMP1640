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
<form class="profileForm">
  <div class="container">
    <!-- Trigger/Open The Modal -->
    <button type="button" class="pswBtn" data-bs-toggle="modal" data-bs-target="#changePassword_modal">Change password <span class="iconify" data-icon="akar-icons:key"></span> </button>
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

<!-- Modal -->
<div class="modal fade" id="changePassword_modal" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modalContent">
    
      <div class="modal-header modalHeader">
        <h5 class="modal-title" id="changePasswordLabel"><b>Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body modalBody">
        <form>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Current Password : </label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">New Password : </label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm New-Password : </label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
        </form>
      </div>
      
      <div class="modal-footer modalFooter">
        <button type="button" class="cancelPasswordBtn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="submitPasswordBtn">Submit</button>
     </div>
    </div>
  </div>
</div>

<script>

</script>
@endsection
</body>
</html>
