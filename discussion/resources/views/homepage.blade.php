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
            <!---------------------------------------Create Modal --------------------------------------------->

                    
            <!---------------------------------------End Of Modal---------------------------------------------->
            <div class="accordion accordion-flush overflow-auto p-2 bg-transparent" style="max-height: 630px;" id="accordionFlushExample">
               <div class="accordion-item flex">
                 <h5 class="accordion-header" id="flush-headingOne">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     #FACILITIES
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
                 </h5>
                 <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                   <div class="accordion-body">
                     <div class="list-group" id="categoryListGroup">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-transparent">
                           #CBEASON
                           <span class="badge badge-primary badge-pill">
                              11
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-transparent">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center">
                           + ADD TITLE
                        </a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingTwo">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     #LECTURER
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
                 </h2>
                 <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                     <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center">
                        + ADD TITLE
                     </a>
                   </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingThree">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     #NOTHING
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
                 </h2>
                 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                     <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center">
                        + ADD TITLE
                     </a>
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