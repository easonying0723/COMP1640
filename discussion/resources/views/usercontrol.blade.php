@extends ('layouts/sidebar')

@section('title', 'User Control')

<!-- Own -->
<script src="{{ URL::asset('js/usercontrol.js') }}" type="module"></script>

@section('usercontrolcontent')
<!-- ----------------------------------------Content---------------------------------------- -->
   <br>
      <div class="content">
         <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #414372">
            <i class='bx bx-plus-circle' style="color: white;"></i>
            CREATE USER
            </button>
         </div><br>
         <div class="container">
            <div class="form-row">
               <div class="form-group col-md-12">
                  <table class="table table-striped table-bordered table-hover horizontal-scrollable" id="usercontrolTable">
                     <thead>
                           <tr>
                              <th>User ID</th>
                              <th>User Name</th>
                              <th>User Email</th>
                              <th>Department</th>
                              <th>Position</th>
                              <th>Accesibility</th>
                              <th>Status</th>
                              <th></th>
                           </tr>
                     </thead>
                     <tbody id="stockadjBody"> 
                           <tr>
                              <td>SCPG1700562</td>
                              <td>Yvette Yee YingYing</td>
                              <td>scpg1700562@segi4u.my</td>
                              <td>Information Technology</td>
                              <td>Manager</td>
                              <td>Level3</td>
                              <td></td>
                              <td></td>
                           </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

      <!-- ------------------------------------- Create user-control (Modal Box)--------------------------------------- -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Create User Control</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">Pre-set Username:</label>
                           <input type="text" class="form-control" id="" placeholder="Please insert..." required>
                        </div>
                        <div class="col-md-6">
                           <label for="">Pre-set Password:</label>
                           <input type="text" class="form-control" id="" placeholder="Please insert..." required>
                        </div>
                     </div><br>
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">User Email:</label>
                           <input type="text" class="form-control" id="" placeholder="Please insert..." required>
                        </div>
                        <div class="col-md-6">
                           <label for="">Department:</label>
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Please Choose...</option>
                              <option value="1">IT</option>
                              <option value="2">Marketing</option>
                              <option value="3">Accounting Finance</option>
                           </select>
                        </div>
                     </div><br>
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">Position:</label>
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Please Choose...</option>
                              <option value="1">Manager</option>
                              <option value="2">Coordinator</option>
                              <option value="3">Admin</option>
                              <option value="3">Staff</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="">Accessibility:</label>
                           <select class="form-select" aria-label="Default select example">
                              <option selected>Please Choose...</option>
                              <option value="1">Level 1</option>
                              <option value="2">Level 2</option>
                              <option value="3">Level 3</option>
                           </select>
                        </div>
                     </div><br>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="createusercontrol">Create</button>
               </div>
            </div>
         </div>
      </div>

      <!-- ------------------------------------- Success (Modal Box)--------------------------------------- -->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Succesfully Created.</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <label>New User created.</label>
                  <label>Notification will be send for user through email.</label>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Notice</button>
               </div>
            </div>
         </div>
      </div>
    @endsection