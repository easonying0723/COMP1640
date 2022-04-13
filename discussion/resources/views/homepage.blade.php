@extends ('layouts/sidebar')

@section('title', 'Home Page')

<link href="{{ URL::asset('css/homepage.css') }}" rel="stylesheet">
<script src="{{ URL::asset('js/homepage.js') }}" type="module"></script>

@section('category')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css">
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>

<!-- Datepickers -->
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
<link rel="stylesheet" href="https://fengyuanchen.github.io/datepicker/css/datepicker.css">
<script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>

<!-- Multiselect -->
<link href="{{ URL::asset('css/bootstrap-multiselect.css') }}" rel="text/css">
<script src="{{ URL::asset('js/bootstrap-multiselect.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
   crossorigin="anonymous"></script>

<div class="row homepagecontent">
   <div class="col-md-3 categorynav">
      <br>
      <form type="" action="">
        @csrf
      <input type="search" class="form-control" placeholder="Search" name="search" value="" />
      <button class="btn btn-outline-light" type="submit" style="margin-left: 60%;margin-top: 10px;">Search</button>
      <a href="/homepage">
      <button class="btn btn-outline-light" type="button" style=" margin-top: 10px;">RESET</button>
      </a>
      </form>
      <br>
      <div class="categoryContainer">
         <div class="container">
            <p class="justify-content-between" style="color: #D0D4E3; font-weight: bold;">Category
            @if($LoggedUserInfo->position == 'manager' || "admin")
               <button type="button" id="addcategory" class="btn btn-primary btn-lg bg-transparent float-right"
                  data-bs-toggle="modal" data-bs-target="#categoryModal" style="border: none">
                  <i class='bx bx-plus-circle' style="color: #F4F7FF"></i>
               </button>
            @endif

            </p>  
            
         </div>  
         <div id="accordion-1" class="accordion" role="tablist" style="width: 282px;">
            @foreach($data as $categoryData)
               <div class="accordion-item">
                  <h2 class="accordion-header" role="tab">
                     <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true"
                        aria-controls="accordion-1 .item-1">#{{$categoryData -> cate_name}}<i class="la la-times" style="margin-left: 71px;"></i>
                     </button>
                  </h2>
                  <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                     <div class="accordion-body">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#titleModals">
                        + ADD TITLE
                        </button>
                        <button>
                           <a href="/delete/{{$categoryData->id}}" class="la la-times">DELETE</a>
                        </button>
                     </div>
                  </div>
               </div>@endforeach
         </div>
      </div>
      <!--------------BEFORE 這裏---------------------->
   </div>

   
   <div class="col-md-9 content" style="background-color: #A7B7CD">
      <br>
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
      <div class="container">
         <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="Second group">
               <a class="btn btn-secondary" href="{{route('home', array('filter' => 'recent-view'))}}"> 
               @if(Request::get('filter') == 'recent-view')
                  <strong class = 'text-warning'><red>Recently Viewed<red></strong></a>
               @else
               Recently Viewed</a>
               @endif
               <a class="btn btn-secondary" href="{{route('home', array('filter' => 'hottest-topic'))}}"> 
               @if(Request::get('filter') == 'hottest-topic')
                  <strong class = 'text-warning'><red>Hottest Topics <red></strong></a>
               @else
               Hottest Topics </a>
               @endif</a>
               <a class="btn btn-secondary" href="{{route('home', array('filter' => 'most-liked'))}}">
               @if(Request::get('filter') == 'most-liked')
                  <strong class = 'text-warning'><red>Most Liked <red></strong></a>
               @else
               Most Liked </a>
               @endif
               <a class="btn btn-secondary" href="{{route('home', array('filter' => 'most-viewed'))}}">
               @if(Request::get('filter') == 'most-viewed')
                  <strong class = 'text-warning'><red>Most Viewed <red></strong></a>
               @else
               Most Viewed </a>
               @endif
            </div>

            @if($LoggedUserInfo->position == 'admin')
            <div class="ms-auto">
               <a class="btn btn-primary" id="buttonClosureDate">Set Closure Date</a>
            </div>
            @endif

            @if($LoggedUserInfo->position == 'manager')
            <div class="ms-auto">
               <a id="buttonExport" class="btn btn-primary">Export All Data</a>
            </div>
            @endif
         </div>
      </div>
      <div class="container">
         <div class="row row-cols-3">
            <div class="col-sm-4">
               <div class="card" style="width: 18rem;">
                  <img src="images/add.png" class="card-img-top" style="">
                  <div class="card-body">
                     @if(date('Y-m-d',strtotime($idea_closure_date->detail)) >= date('Y-m-d'))
                     <button type="button" class="btn btn-primary" data-toggle="modal" id="addidea">
                        + New Idea
                     </button>
                     @else
                     <p>Adding idea is no longer allowed after closure date.</p>
                     @endif
                  </div>
               </div>
            </div>
            @foreach($ideas as $index => $idea)
            <div class="col-sm-4">
               <div class="card">
                  <div class="card-header">
                     <strong class="me-auto">{{$idea->subject}}</strong>
                     <br>
                     <small>{{$idea->created_at}}</small>
                  </div>
                  <div class="card-body">
                     <div>
                        <h6 class="card-subtitle mb-2 text-muted fw-bold">{{$idea->anonymous == 1 ? 'Anonymous' : (isset($idea->user) ? $idea->user->name : $idea->user_name)}}
                           <img src="images/ironman.png" id="userimg">
                        </h6>
                        <button type="button" class="btn btn-info btn-sm" disabled>{{ $idea->department}} Department</button>
                     </div>
                     <br>
                     <p class="card-text ideascontent">{{$idea->idea}}</p>
                     <button type="button" class="btn btn-secondary view-btn" data-toggle="modal" id="view" data-target="{{'#idea-'.$idea->id}}" data-id="{{ $idea->id }}">View</button>

                     <small style="float: right; margin: 10px">{{$idea->number_of_view}} {{$idea->number_of_view > 1 ? 'views' : 'view'}}</small>
                  </div>
                  <div class="card-footer">
                     <div>
                        <button id="like" onClick="like({{$idea->id}},false)" class="btn like btn-warning btn-sm" style="margin:1px;">
                           @if($idea->user_like == 1)
                           <span class="bx bxs-like" aria-hidden="true"></span>
                           @else
                           <span class="bx bx-like" aria-hidden="true"></span>
                           @endif
                           <span class="likes" id="likeValue"></span>
                           @if($idea->user_like == 1)
                           <span id="{{'number_of_like_'.$idea->id}}"><strong>{{$idea->number_of_like}}</strong></span>
                           @else
                           <span id="{{'number_of_like_'.$idea->id}}"> {{$idea->number_of_like}}</span>
                           @endif
                        </button>
                        <button id="dislike" onClick="dislike({{$idea->id}},false)" class="btn dislike btn-danger btn-sm" style="margin:1px;">
                           @if($idea->user_like == 0)
                           <span class="bx bxs-dislike" aria-hidden="true"></span>
                           @else
                           <span class="bx bx-dislike" aria-hidden="true"></span>
                           @endif
                           <span class="dislikes" id="dislikeValue" enabled='false'></span>
                           @if($idea->user_like == 0)
                           <span id="{{'number_of_dislike_'.$idea->id}}"><strong>{{$idea->number_of_dislike}}</strong></span>
                           @else
                           <span id="{{'number_of_dislike_'.$idea->id}}"> {{$idea->number_of_dislike}}</span>
                           @endif</button>
                        <small style="float: right; margin: 10px">{{$idea->number_of_comment}} {{$idea->number_of_comment > 1 ? 'comments' : 'comment'}}</small>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <br>
      <div class="d-flex justify-content-end">
         {!! $ideas->links("pagination::bootstrap-4") !!}
      </div>
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
         <form action="{{url ('/homepage/category/stored')}}" method="POST">
            @csrf
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <label for="">Category Name:</label>
                     <div id="newtask">
                        <input type="text" class="form-control" id="" placeholder="Please enter category name" name="cate_name" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <label for="">Department:</label>
                     <select id="multidepartment" multiple="multiple" name="cate_option" hidden>
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
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="addC">Add</button>
         </div>
         </form>
      </div>
   </div>
</div>
   <div id="tasks">


   {{---------------------------- Add Title Modal ----------------------------}}
   <div class="modal fade" id="titleModal" tabindex="-1" aria-labelledby="titleModallLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="titleModalLabel">Add New Title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url ('/homepage/category/stored')}}" method="POST">
            @csrf
            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <label for="">Title Name:</label>
                        <input type="text" class="form-control" id="title_name" placeholder="Please enter category name" required>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <label for="promoduration">Duration:</label>
                        <div class="input-group" >
                           <div class="input-group-prepend">
                              <span class="input-group-text"><i class="iconify" data-icon="bx:calendar-alt"></i></span>
                           </div>
                           <input type="text" placeholder="Start date" aria-label="First name"
                              class="form-control start-date" id="title_duration_start">
                           <input type="text" placeholder="End date" aria-label="Last name"
                              class="form-control end-date" id="title_duration_end">
                        </div>
                     </div>
                  </div>
               </div><br>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" id="createtitle">Create</button>
            </div>
            </form>
         </div>
      </div>
   </div>



   {{---------------------------- Add Ideas Modal ----------------------------}}
   <div class="modal fade" id="ideaModal" tabindex="-1" aria-labelledby="ideaModallLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <form action="{{ url('homepage/idea/store') }}" method="POST" enctype="multipart/form-data">
               <div class="modal-header">
                  <h5 class="modal-title" id="ideaModalLabel">Add New Idea</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Subject:</label>
                           <input type="text" class="form-control" id="subject" name="subject"
                              placeholder="Please enter subject" required>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Idea:</label>
                           <textarea name="idea" class="form-control" rows="3"
                              placeholder="Creative Ideas, Creative DISCUSS.ION." required></textarea>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="category">Category:</label>
                           <select name="category" id="category" class="form-control">
                           <option selected>Please Choose...</option>
                           @foreach($data as $categoryData)
                             <option value="{{$categoryData ->id}}">{{$categoryData -> cate_name}}</option>
                           @endforeach
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="mb-3">
                              <label for="uploadfile" class="form-label">Upload File</label>
                              <input class="form-control" type="file" id="uploadfile" name="file[]" multiple>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="itemupload">Upload Photo:</label><br>
                           <input type="file" name="img[]" class="file" accept="image/*" id="uploadphoto">
                           <div class="input-group my-3">
                              <!-- <input type="text" class="form-control" disabled placeholder="Upload Photo" id="photo" multiple> -->
                           </div>
                           <img src="images/uploadphoto.png" id="preview" width="50%" class="img-thumbnail">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault"
                                 name="anonymous">
                              <label class="form-check-label" for="flexCheckDefault">
                                 Do you want to post anonymously?
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="true" id="checkboxTNC"
                                 name="checkboxTNC" required>
                              <label class="form-check-label" for="checkboxTNC">
                                 I agree to the<span> <a id='buttontnc' href="{{URL::to('/terms-idea')}}" target="_blank">Terms & Conditions</a></span> 
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="createidea">Create</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   {{---------------------------- Closure Date Modal ----------------------------}}
   <div class="modal fade" id="modalClosureDate" tabindex="-1" aria-labelledby="ideaModallLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <form action="{{ url('homepage/closure_date') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="modal-header">
                  <h5 class="modal-title" id="ideaModalLabel">Set Closure Date</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <p>Closure date for academic year {{date('Y')}}</p>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Idea Closure Date:</label>
                           <input type="date" id="idea_closure_date" name="idea_closure_date" value="{{$idea_closure_date->detail}}" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Comment Closure Date:</label>
                           <input type="date" id="comment_closure_date" name="comment_closure_date" value="{{$comment_closure_date->detail}}" required>
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modaltnc" tabindex="-1" aria-labelledby="ideaModallLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            Terms and condition
         </div>
      </div>
   </div>
   </div>



   {{---------------------------- View Idea Modal ----------------------------}}

   @foreach($ideas as $index => $idea)
   <div class="modal fade" id="{{'idea-'.$idea->id}}" data tabindex="-1" aria-labelledby="viewModallLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <strong>
                  <h4 class="modal-title fw-bold" id="viewModalLabel">{{$idea->subject}}</h4>
               </strong>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                  data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div>
                           <h6 class="mb-2 text-muted fw-bold">{{$idea->anonymous == 1 ? 'Anonymous' : (isset($idea->user) ? $idea->user->name : $idea->user_name)}}
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>{{$idea->department}} Department</button>
                           <br><br>
                           <small>{{$idea->created_at}}</small>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12 d-flex justify-content-center" id="photosec">
                        @if($idea->photo)
                        <a href="{{'images/idea/' .$idea->photo}}" target="_blank">
                           <img width="100%" class="img-fluid" src="{{'images/idea/' .$idea->photo}}" id="pictureshow">
                        </a>
                        @endif
                     </div>
                  </div>
                  <br>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12" id="ideasec">
                           <h5 class="card-text" id="ideascontent">{{$idea->idea}}</h5>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="container">
                     <div class="row row-cols-3">
                        @if($idea->file)
                        @foreach( (explode(',',$idea->file)) as $index => $file)
                        <div class="col-md-2" id="filedownloadsec">
                           <div class="card">
                              <a href="{{ 'file/idea/' . $file }}" target="_blank" download>
                                 <img class="card-img-top" src="images/folder.png" alt="Image cap">
                                 <div class="card-body">
                                    <a href="{{ 'file/idea/' . $file }}" target="_blank" download>
                                       <p class="card-text">{{$file}}</p>
                                    </a>
                                 </div>
                              </a>
                           </div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <hr />
            <div class="container">
               <div id="numbersec">
                  <button class="btn like btn-warning" onClick="like({{$idea->id}},true)" style="margin:1px;">
                     @if($idea->user_like == 1)
                     <span class="bx bxs-like" aria-hidden="true"></span>
                     <span class="likes"><strong>Like {{$idea->number_of_like}}</strong></span>
                     @else
                     <span class="bx bx-like" aria-hidden="true"></span>
                     <span class="likes">Like {{$idea->number_of_like}}</span>
                     @endif
                  </button>
                  <button class="btn dislike btn-danger" onClick="dislike({{$idea->id}},true)" style="margin:1px;">
                     @if($idea->user_like == 0)
                     <span class="bx bxs-dislike" aria-hidden="true"></span>
                     <span class="dislikes"><strong>Dislike {{$idea->number_of_dislike}}</strong></span>
                     @else
                     <span class="bx bx-dislike" aria-hidden="true"></span>
                     <span class="dislikes">Dislike {{$idea->number_of_dislike}}</span>
                     @endif

                  </button>
                  <small style="float: right; margin: 10px">{{$idea->number_of_view}} {{$idea->number_of_view > 1 ? 'views' : 'view'}}</small>
                  <small style="float: right; margin: 10px">{{$idea->number_of_comment}} {{$idea->number_of_comment > 1 ? 'comments' : 'comment'}}</small>
               </div>
            </div>
            <hr/>

            
            <div class="container">
               <div class="modal-body" id="footersec">
               @if(date('Y-m-d',strtotime($comment_closure_date->detail)) >= date('Y-m-d'))
                  <form action="{{ route('homepage.store_comment', ['id' => $idea->id ])}}" method="post">
                     @csrf
                     <div class="row" id="commentsec">
                        <div class="col-md-1" id="">
                           <img src="images/ironman.png" id="commentimg" alt="profilepic">
                        </div>
                        <div class="col-md-11">
                           <!--Comment Section-->
                           <div class="input-group mb-2 mt-2">
                              <input type="text" class="form-control" name="comment"
                                 placeholder="Comment civilly here <3" aria-label="" aria-describedby="">
                              <div class="input-group-append">
                                 <button class="btn btn-info" type="submit">Comment</button>
                              </div>
                           </div>
                           <div class="form-check ml-3">
                              <input class="form-check-input" type="checkbox" name="anonymity" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                 Do you want to post anonymously?
                              </label>
                           </div>
                        </div>
                     </div>
                  </form>
                  @endif
               </div>
               <br><br>

               <div class="container" id="{{'comment-section-'.$idea->id}}">

                 
               </div>
               <br>
            </div>
         </div>
      </div>
   </div>
   @endforeach



   <script>
      $('#buttonExport').on('click',function () {
         var base_url = window.location.origin;
         window.location.href=base_url +'/homepage/export_data';
         setTimeout(() => {
            window.location.href=base_url+'/homepage/export_file';
         }, 1000);
      });

      $('#buttonClosureDate').on( 'click',function () {
         $("#modalClosureDate").modal("show");
      });
      
      $(document).on("click", ".browse", function() {
         var photo = $(this).parents().find("#photo");
         photo.trigger("click");
      });
      
      $("#uploadphoto").change(function(e) {
         var fileName = e.target.files[0].name;
         
         $("#photo").val(fileName);

         var reader = new FileReader();
         reader.onload = function(e) {
         // get loaded data and render thumbnail.
         document.getElementById("preview").src = e.target.result;
         };
         // read the image file as a data URL.
         reader.readAsDataURL(this.files[0]);
      });

      $(document).ready(function() {
         if (window.location.hash) {
            var hash = window.location.hash;
            idea_id = hash.substring(6);
            $('[data-id="'+idea_id+'"]').click();
            window.location.href.split('#')[0];
         }
      });
      //pass id to controller to display comment of the clicked idea
      $('.view-btn').click(function () {
         const id = $(this).attr('data-id');
         $.ajax({
            url: 'homepage/comment_details/' + id,
            type: 'GET',
            data: { "id": id },
            success: function (data) {
               var idea_id = 'comment-section-' + id;
               var commentcontainer = document.getElementById(idea_id);
               commentcontainer.innerHTML="";
               var name = "";
               var profilepic="";
               for (var i = 0; i < data.length; i++) {

                   if(data[i].anonymity == 0)
                   {
                      profilepic = data[i].profilepic;
                      name = data[i].name;
                   }
                   else
                   {
                      profilepic = "profile3.png";
                      name = "Anonymous";
                   }
                  commentcontainer.innerHTML += '<div class="container"><div class="row" id="viewcommentsec"><div class="col-md-1"><img src="images/' + profilepic + '" style="object-fit:contain;width:100%;height:100%" class="commentimg"></div><div class="col-md-11"><h6 class="mb-2 text-muted fw-bold" class="comment-username">' + name + '</h6><h6 class="comment-content">' + data[i].comment + '</h6><small><span class="comment-dt">' + data[i].created_at + '</span></small></div></div></div><br>';
               }
            }
         })
      });

      function like(id, open_modal) {
         $.ajax({
            url: 'homepage/liked/' + id,
            type: 'GET',
            success: function(data) {
               if(data != 'success'){
                  alert(data);
                  return;
               }
               if (open_modal == false){
                  window.location.href = window.location.href.split('#')[0]
               }
               else if (open_modal == true) {
                  window.location.hash = '#idea-' + id;
                  window.location.reload(true);
               }
            }
         })
      }

      function dislike(id, open_modal) {
         $.ajax({
            url: 'homepage/disliked/' + id,
            type: 'GET',
            success: function(data) {
               if(data != 'success'){
                  alert(data);
                  return;
               }
               if (open_modal == false){
                  window.location.href = window.location.href.split('#')[0]
               }
               else if (open_modal == true) {
                  window.location.hash = '#idea-' + id;
                  window.location.reload(true);
               }
            }
         })
      }



      // function setLikeText(id, newvalue) {
      //    var s = document.getElementById(id);
      //    s.innerHTML = newvalue;
      // }

      // function setDislikeText(id, newvalue) {
      //    var s = document.getElementById(id);
      //    s.innerHTML = newvalue;
      // }

      // window.onload = function () {
      //    setLikeText("likeValue", 0);
      //    setDislikeText("dislikeValue", 0);
      // }

      // var currentLike = document.getElementById("likeValue").textContent;
      // var currentDislike = document.getElementById("dislikeValue").textContent;

      // $('#like').click(function () {
      //    console.log(currentLike);
      //    console.log(currentDislike);

      //    if (currentLike > 0) {
      //       setLike("likeValue", 0);
      //    }

      //    else {
      //       setLikeText("likeValue", 1);
      //       setDislikeText("dislikeValue", 0);
      //    }

      // });


      // $('#dislike').click(function () {
      //    if (currentDislike > 0) {
      //       setDislikeText("dislikeValue", 1);
      //    }
      //    else {
      //       setDislikeText("dislikeValue", 1);
      //       setLikeText("likeValue", 0);
      //    }
      // });
   </script>

   @endsection