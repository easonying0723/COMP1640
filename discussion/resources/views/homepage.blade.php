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
            <div class="accordion accordion-flush overflow-auto p-3 bg-transparent" style="max-height: 630px;" id="accordionFlushExample">
               <div class="accordion-item">
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
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;" id="categorylist">
                           #CHAIR
                           <span class="badge badge-primary badge-pill">
                              11
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-primary list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
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
                     
                   </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingThree">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     #ANYTHING
                   </button>
                 </h2>
                 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
            
                   </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-9" style="background-color: #E7E7F8">
         <br>
         <nav aria-label="breadcrumb" style="font-weight: bold;">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home Page</a></li>
              <li class="breadcrumb-item"><a href="#">#FACILITIES</a></li>
              <li class="breadcrumb-item" aria-current="page">#CHAIR</li>
            </ol>
         </nav>
         <div class="btn-toolbar" role="toolbar" aria-label="">
            <div class="btn-group me-2" role="group" aria-label="">
              <button type="button" class="btn btn-secondary">Recent Posts</button>
              <button type="button" class="btn btn-secondary">Hottest Topics</button>
              <button type="button" class="btn btn-secondary">Most Liked</button>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-header">
                  <strong class="card-title">Why use Wordpress do FYP?</strong><br>
                  <small>11 mins ago</small>
                </div>
                <div class="card-body">
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
      </div>
   </div>
@endsection