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
            <div class="accordion accordion-flush overflow-auto p-2 bg-transparent" style="max-height: 300px;" id="accordionFlushExample">
               <div class="accordion-item">
                 <h5 class="accordion-header" id="flush-headingOne">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     #FACILITIES
                     <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning rounded-circle">
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
                     <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
                 </h2>
                 <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                        <a href="#" class="list-group-item list-group-item-primary list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           + ADD TITLE
                        </a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header" id="flush-headingThree">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     #ANYTHING
                     <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
                 </h2>
                 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
                        <a href="#" class="list-group-item list-group-item-primary list-group-item-action d-flex justify-content-between align-items-center" style="border:none;">
                           + ADD TITLE
                        </a>
                     </div>
                   </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-9">
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
         wdbiuwehowienfksjdbksbdosd
      </div>
   </div>
@endsection