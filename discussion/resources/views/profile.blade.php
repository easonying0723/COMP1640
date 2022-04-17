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
@if(Session::get('success'))
   <div class="alert alert-success">
      {{ Session::get('success') }}
   </div>
 @endif
 @if(Session::get('fail'))
   <div class="alert alert-danger">
      {{ Session::get('fail') }}
   </div>
 @endif

@section('profilecontent')
<!--<h2 class="title">Profile Setting</h2>-->
@foreach($users as $data)
<div class="empty">
<div class="profileForm">
  <div class="profileContent">
    <!-- Trigger/Open The Modal -->
    <button type="button" id="changePassBtn" class="pswBtn" data-bs-toggle="modal" data-bs-target="#changePassword_modal">Change password <span class="iconify" data-icon="akar-icons:key"></span> </button>
    <p class="userid">UserID: {{$data->id}}</p>
  </div>

  <form action="{{route('profile.updateprofilepic')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="profile-pic">
    <label class="-label" for="file">
      <span class="glyphicon glyphicon-camera"></span>
      <span>Change Image</span>
    </label>
    <input id="file" type="file" name="image" accept="image/*" class="file" onchange="loadFile(event)"/> 
    <img src="images/{{$data->profilepic}}" id="profilePic" width="200" />
  </div> 

  <div class="row">
    <p id="profileName" class="name">{{$data->name}}</p>
  </div>


  <div class="small-middle-container">
 
  <div class="row">
      <label for="email" class="leftsection"><b>Email:</b></label><br>
      <input type="text" name="email" value="{{$data->email}}"style="background-color: #E6E6E5" disabled>
  </div>
  <div class="row">
    <label for="department" class="leftsection"><b>Department:</b></label><br>
    <input type="text" name="department" class="leftsection" style="background-color: #E6E6E5" value="{{$data->department}}" disabled>
  </div>
  <div class="row">
    <label for="position" class="rightsection"><b>Position:</b></label><br>
    <input type="text" name="position" class ="rightsection" style="background-color: #E6E6E5" value="{{$data->position}}" disabled>
    </div>
</div>
<br>
<div class="text-center">
  <button type="submit" class="btn btn-secondary">Change Photo</button>
  </div>

</form>
</div>
</div>
@endforeach

<!-- Modal -->
<div class="modal fade" id="changePassword_modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color: #F4F6FB;">
      <div class="modal-header modalHeader">
        <h5 class="modal-title" id="modalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modalBody">
        <form action="{{ url('profile/changePassword') }}" method="post">
        @csrf
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">Current Password : </label>
            <input type="password" class="form-control" name="currentpw">
            <span class="text-danger">@error('currentpw'){{ $message }} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">New Password : </label>
            <input type="password" class="form-control" name="newpw">
            <span class="text-danger">@error('newpw'){{ $message }} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="InputPassword1" class="col-form-label">Confirm New-Password : </label>
            <input type="password" class="form-control" name="confirmpw">
            <span class="text-danger">@error('confirmpw'){{ $message }} @enderror</span>
          </div>
        
      </div>
      <div class="modal-footer modalFooter">
        <button type="button" class="cancelPasswordBtn" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="submitPasswordBtn">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
 var loadFile = function (event) {
 var image = document.getElementById("profilePic");
 image.src = URL.createObjectURL(event.target.files[0]);
 };

// $(document).on("click", ".browse", function() {
//          var photo = $(this).parents().find("#photo");
//          photo.trigger("click");
//       });
      
//       $("#uploadphoto").change(function(e) {
//          var fileName = e.target.files[0].name;
         
//          $("#photo").val(fileName);

//          var reader = new FileReader();
//          reader.onload = function(e) {
//          // get loaded data and render thumbnail.
//          document.getElementById("preview").src = e.target.result;
//          };
//          // read the image file as a data URL.
//          reader.readAsDataURL(this.files[0]);
//       });
</script>
@endsection
</body>
</html>
