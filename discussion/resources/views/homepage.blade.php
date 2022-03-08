@extends ('layouts/sidebar')

<!-- Own -->
<link href="{{ URL::asset('css/homepage.css') }}" rel="stylesheet">
<script src="{{ URL::asset('js/homepage.js') }}" type="module"></script>

@section('title', 'Home Page')

@section('category')
   <div class="row" >
      <div class="col-md-3" style="background-color: #5E5267">
         <br>
         <input type="text" class="form-control" placeholder="Search">
         <br>
         <div class="categoryContainer">
    <div class="container">
       <p class="justify-content-between" style="color: #D0D4E3; font-weight: bold;">Category
          <button type="button" id="categoryadd" class="btn btn-primary btn-lg bg-transparent float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none">
             <i class='bx bx-plus-circle' style="color: #F4F7FF"></i>
          </button>
       </p>
    </div>
    <!------------Modal Box----------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-6">
                          <label for="">Category:</label>
                          <input type="text" class="form-control" id="" placeholder="Please fill in..." required>
                       </div>
                       <div class="col-md-6">
                          <label for="">Creator Name:</label>
                          <input type="text" class="form-control" id="" placeholder="Please state..." required>
                       </div>
                    </div><br>
                    <div class="row">
                       <div class="col-md-6">
                          <label for="">Description:</label>
                          <input type="text" class="form-control" id="" placeholder="Please state..." required>
                       </div>
                       
                    </div><br>                   
                    </div><br>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary" id="createcategory">Create</button>
              </div>
           </div>
        </div>
     </div>
 </div>
      </div>
      <div class="col-md-9" style="background-color: #A7B7CD">
         <br>
         <div class="container">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
               <div class="btn-group me-2" role="group" aria-label="Second group">
                 <button type="button" class="btn btn-secondary"> Recent View </button>
                 <button type="button" class="btn btn-secondary"> Hottest Topics </button>
                 <button type="button" class="btn btn-secondary"> Most Liked </button>
               </div>
             </div>
         </div>
         <div class="container">
            <div class="row row-cols-3">
               <div class="col-sm-4" >
                  <div class="card" style="width: 18rem;">
                     <img src="images/virtual-discussion-illustration-free-vector.jpg" class="card-img-top" style="">
                     <div class="card-body">
                       <a href="#" class="btn btn-primary">+ New Ideas</a>
                     </div>
                   </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <div class="card-header">
                        <strong class="me-auto">Why FYP use Wordpress?</strong>
                        <br>
                        <small>11 mins ago</small>
                     </div>
                     <div class="card-body">
                        <div>
                           <h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold; float: middle;">Yee YingYing
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                        </div>
                        <br>
                        <p class="card-text d-inline-block text-truncate" style="max-width: 100%; overflow: hidden;">The high-level management of SEGi so sucks. Keep kicking ball over.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div id="demo">
                           <button class="btn btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true" id="like"></span><span class="likes"> 0</span></button>
                           <button class="btn btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true" id="dislike"></span><span class="dislikes"> 0</span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <div class="card-header">
                        <strong class="me-auto">Why FYP use Wordpress?</strong>
                        <br>
                        <small>11 mins ago</small>
                     </div>
                     <div class="card-body">
                        <div>
                           <h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold; float: middle;">Yee YingYing
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                        </div>
                        <br>
                        <p class="card-text d-inline-block text-truncate" style="max-width: 100%; overflow: hidden;">The high-level management of SEGi so sucks. Keep kicking ball over.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div id="demo">
                           <button class="btn btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true" id="like"></span><span class="likes"> 0</span></button>
                           <button class="btn btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true" id="dislike"></span><span class="dislikes"> 0</span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <div class="card-header">
                        <strong class="me-auto">Why FYP use Wordpress?</strong>
                        <br>
                        <small>11 mins ago</small>
                     </div>
                     <div class="card-body">
                        <div>
                           <h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold; float: middle;">Yee YingYing
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                        </div>
                        <br>
                        <p class="card-text d-inline-block text-truncate" style="max-width: 100%; overflow: hidden;">The high-level management of SEGi so sucks. Keep kicking ball over.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div id="demo">
                           <button class="btn btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true" id="like"></span><span class="likes"> 0</span></button>
                           <button class="btn btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true" id="dislike"></span><span class="dislikes"> 0</span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <div class="card-header">
                        <strong class="me-auto">Why FYP use Wordpress?</strong>
                        <br>
                        <small>11 mins ago</small>
                     </div>
                     <div class="card-body">
                        <div>
                           <h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold; float: middle;">Yee YingYing
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                        </div>
                        <br>
                        <p class="card-text d-inline-block text-truncate" style="max-width: 100%; overflow: hidden;">The high-level management of SEGi so sucks. Keep kicking ball over.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div id="demo">
                           <button class="btn btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true" id="like"></span><span class="likes"> 0</span></button>
                           <button class="btn btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true" id="dislike"></span><span class="dislikes"> 0</span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card">
                     <div class="card-header">
                        <strong class="me-auto">Why FYP use Wordpress?</strong>
                        <br>
                        <small>11 mins ago</small>
                     </div>
                     <div class="card-body">
                        <div>
                           <h6 class="card-subtitle mb-2 text-muted" style="font-weight: bold; float: middle;">Yee YingYing
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                        </div>
                        <br>
                        <p class="card-text d-inline-block text-truncate" style="max-width: 100%; overflow: hidden;">The high-level management of SEGi so sucks. Keep kicking ball over.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div id="demo">
                           <button class="btn btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true" id="like"></span><span class="likes"> 0</span></button>
                           <button class="btn btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true" id="dislike"></span><span class="dislikes"> 0</span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
         </nav>
         <br>
      </div>
   </div>

@endsection