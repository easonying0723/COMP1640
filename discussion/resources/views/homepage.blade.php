@extends ('layouts/sidebar')

@section('title', 'Home Page')

<link href="{{ URL::asset('css/homepage.css') }}" rel="stylesheet">
<script src="{{ URL::asset('js/homepage.js') }}" type="module"></script>

@section('category')

<!-- Multiselect CDN -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Datepickers -->
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
<script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>

<!-- Multiselect -->
<link href="{{ URL::asset('css/bootstrap-multiselect.css') }}" rel="text/css">
<script src="{{ URL::asset('js/bootstrap-multiselect.js') }}" type="text/javascript"></script>

   <div class="row homepagecontent">
      <div class="col-md-3 categorynav">
         <br>
         <input type="text" class="form-control" placeholder="Search">
         <br>
         <div class="categoryContainer">
            <div class="container">
               <p class="justify-content-between" style="color: #D0D4E3; font-weight: bold;">Category
                  <button type="button" id="addcategory" class="btn btn-primary btn-lg bg-transparent float-right" data-bs-toggle="modal" data-bs-target="#categoryModal" style="border: none">
                     <i class='bx bx-plus-circle' style="color: #F4F7FF"></i>
                  </button>
               </p>
            </div>
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
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                           #CBEASON
                           <span class="badge badge-primary badge-pill">
                              11
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" id="addtitle">
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
                     <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" id="addtitle">
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
                     <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" id="addtitle">
                        + ADD TITLE
                     </a>
                  </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-9 content" style="background-color: #A7B7CD">
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
                     <img src="images/add.png" class="card-img-top" style="">
                     <div class="card-body">
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        + New Idea
                      </button>
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
                        <p class="card-text ideascontent">The high-level management of SEGi so sucks. Keep kicking ball over. SEGi really is a sampah school.</p>
                        <a href="#" class="btn btn-secondary">View</a>
                        
                        <small style="float: right; margin: 10px">23 Views</small>
                     </div>
                     <div class="card-footer">
                        <div>
                           <button id="like" class="btn like btn-warning btn-sm" style="margin:1px;"><span class="bx bx-like" aria-hidden="true"></span><span class="likes" id="likeValue"></span></button>
                           <button id="dislike" class="btn dislike btn-danger btn-sm" style="margin:1px;"><span class="bx bx-dislike" aria-hidden="true"></span><span class="dislikes"id="dislikeValue" enabled='false'></span></button>
                           <small style="float: right; margin: 10px">78 Comments</small>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  
               </div>
               <div class="col-sm-4">
                  
               </div>
               <div class="col-sm-4">
                  
               </div>
               <div class="col-sm-4">
                  
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


{{---------------------------- Add Category Modal ----------------------------}}
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModallLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="categoryModalLabel">Add New Category</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <label for="">Category Name:</label>
                     <input type="text" class="form-control" id="" placeholder="Please enter category name" required>
                  </div>
                  <div class="col-md-6">
                     <label for="">Department:</label>
                     <select id="multidepartment" multiple="multiple" hidden>
                        <optgroup label="Series 1" class="group-1">
                           <option value="1-1">Option 1.1</option>
                           <option value="1-2">Option 1.2</option>
                           <option value="1-3">Option 1.3</option>
                        </optgroup>
                        <optgroup label="Series 2" class="group-2">
                              <option value="2-1">Option 2.1</option>
                              <option value="2-2">Option 2.2</option>
                              <option value="2-3">Option 2.3</option>
                        </optgroup>
                        <optgroup label="Series 3" class="group-3">
                              <option value="3-1">Option 3.1</option>
                              <option value="3-2">Option 3.2</option>
                              <option value="3-3">Option 3.3</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <br>                   
            </div><br>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="createcategory">Create</button>
         </div>
      </div>
   </div>
</div>

{{---------------------------- Add Title Modal ----------------------------}}
<div class="modal fade" id="titleModal" tabindex="-1" aria-labelledby="titleModallLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="titleModalLabel">Add New Title</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <label for="">Title Name:</label>
                     <input type="text" class="form-control" id="" placeholder="Please enter category name" required>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <label for="promoduration">Duration:</label>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="iconify" data-icon="bx:calendar-alt"></i></span>
                        </div>
                        <input type="text" placeholder="Start date" aria-label="First name" class="form-control start-date">
                        <input type="text" placeholder="End date" aria-label="Last name" class="form-control end-date">
                     </div>
                  </div>
               </div>                    
            </div><br>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="createcategory">Create</button>
         </div>
      </div>
   </div>
</div>

{{---------------------------- Success Modal ----------------------------}}
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Added Succesfully.</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <label>New category has been created.</label>
            
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>


   <script>

      function setLikeText(id,newvalue) {
         var s= document.getElementById(id);
         s.innerHTML = newvalue;
      }

      function setDislikeText(id,newvalue) {
         var s= document.getElementById(id);
         s.innerHTML = newvalue;
      }

      window.onload = function() {

         setLikeText("likeValue", 0);
         setDislikeText("dislikeValue", 0);

      }

      var currentLike = document.getElementById("likeValue").textContent;
      var currentDislike = document.getElementById("dislikeValue").textContent;

      //what if don't use span??

      $('#like').click(function() {
         console.log(currentLike);
         console.log(currentDislike);
         if(currentLike > 0){
            setLike("likeValue", 0);
         }
         else {
         setLikeText("likeValue", 1);
         setDislikeText("dislikeValue", 0);
         }
      });


      $('#dislike').click(function() {
         if(currentDislike > 0){
            setDislikeText("dislikeValue", 1);
         }
         else {
         setDislikeText("dislikeValue", 1);
         setLikeText("likeValue", 0);
         }
      });
   </script>

@endsection