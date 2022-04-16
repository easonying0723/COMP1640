@extends ('layouts/sidebar')

@section('title', 'User Control')

<!-- Own -->
{{-- <script src="{{ URL::asset('js/usercontrol.js') }}" type="text/javascript"></script> --}}

@section('usercontrolcontent')
<!-- ----------------------------------------Content---------------------------------------- -->
   <br>
      <div class="content">
         <div class="container">
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal" style="background-color: #414372">
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
                              <th>Status</th>
                              <!-- <th></th> -->
                           </tr>
                     </thead>
                     <tbody id="stockadjBody"> 
                        @foreach($users as $data)
                        <tr>
                           <td>{{$data->id}}</td>
                           <td>{{$data->name}}</td>
                           <td>{{$data->email}}</td>
                           <td>{{$data->department}}</td>
                           <td>{{$data->position}}</td>
                           <td>@if($data->status == 1)<a href="{{'userChangeStatus/'. $data->id}}" class="btn btn-success">Active</a> @else <a href="{{'userChangeStatus/'. $data->id}}" class="btn btn-danger">Inactive</a> @endif</a>
                           <!-- <td><a href="{{ 'usercontrol/delete/' . $data->id }}">Delete</a></td> -->
                        </tr> 
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>

      <!-- ------------------------------------- Create user-control (Modal Box)--------------------------------------- -->
      <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <form action="{{ route('auth.save') }}" method="post">
               @csrf
            <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">Pre-set Username:</label>
                           <input type="text" class="form-control" name="name" placeholder="Please insert..." required>
                           <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-6">
                           <label for="">Pre-set Password:</label>
                           <input type="password" class="form-control" name="password" placeholder="Please insert..." required>
                           <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                     </div><br>
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">User Email:</label>
                           <input type="email" class="form-control" name="email" placeholder="Please insert..." required>
                           <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                        <div class="col-md-6">
                           <label for="">Department:</label>
                           <select class="form-select" name="department"aria-label="Default select example">
                              <option selected>Please Choose...</option>
                              <option value="IT">IT</option>
                              <option value="Marketing">Marketing</option>
                              <option value="Lecturer">Lecturer</option>
                              <option value="Bursary">Bursary</option>
                              <option value="Accounting Finance">Accounting Finance</option>
                           </select>
                        </div>
                     </div><br>
                     <div class="row">
                        <div class="col-md-6">
                           <label for="">Position:</label>
                           <select class="form-select" name="position" aria-label="Default select example">
                              <option selected>Please Choose...</option>
                              <option value="Manager">Manager</option>
                              <option value="Coordinator">Coordinator</option>
                              <option value="Staff">Staff</option>
                           </select>
                        </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="createusercontrol">Create</button>
                    </form>
                    </div>
                     </div><br>
                  </div>
               </div>


            </div>
         </div>

    @endsection


<script type="module">
   $('#usercontrolTable').DataTable({//call table id

   scroll: true,
   responsive: true,
   searching: true,
   paging: true,

   columnDefs: [ {
      targets: 6,
      data: null,
      defaultContent:'<input type="checkbox" id="userstatus" data-toggle="toggle" data-on="On" data-off="Off" data-size="sm" checked required>'
      },

   {
      targets: -1,
      data: null,
      defaultContent: '<button class="btn btn-light" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-trash"></i></button>'
   }],

   });

   $('#createusercontrol').on( 'click',function () {
   $("#successModal").modal("show");
   });

   $('#createusercontrol').on( 'click',function () {
   $("#exampleModal").modal("hide");
   });

</script>