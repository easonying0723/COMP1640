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
      <input type="text" class="form-control" placeholder="Search">
      <br>
      <div class="categoryContainer">
         <div class="container">
            <p class="justify-content-between" style="color: #D0D4E3; font-weight: bold;">Category
               <button type="button" id="addcategory" class="btn btn-primary btn-lg bg-transparent float-right"
                  data-bs-toggle="modal" data-bs-target="#categoryModal" style="border: none">
                  <i class='bx bx-plus-circle' style="color: #F4F7FF"></i>
               </button>
            </p>
         </div>
         <div class="accordion accordion-flush overflow-auto p-2 bg-transparent" style="max-height: 630px;"
            id="accordionFlushExample">
            <div class="accordion-item flex">
               <h5 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     #FACILITIES
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                     </span>
                  </button>
               </h5>
               <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                     <div class="list-group" id="categoryListGroup">
                        <a href="#"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                           #CBEASON
                           <span class="badge badge-primary badge-pill">
                              11
                           </span>
                        </a>
                        <a href="#"
                           class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                           #TOILET
                           <span class="badge badge-primary badge-pill">
                              2
                           </span>
                        </a>
                        <a href="#"
                           class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center"
                           id="addtitle">
                           + ADD TITLE
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                     #LECTURER
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                     </span>
                  </button>
               </h2>
               <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                     <a href="#"
                        class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center"
                        id="addtitle">
                        + ADD TITLE
                     </a>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                     data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                     #NOTHING
                     <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                     </span>
                  </button>
               </h2>
               <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                     <a href="#"
                        class="list-group-item list-group-item-dark list-group-item-action d-flex justify-content-between align-items-center"
                        id="addtitle">
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
            <div class="col-sm-4">
               <div class="card" style="width: 18rem;">
                  <img src="images/add.png" class="card-img-top" style="">
                  <div class="card-body">
                     <button type="button" class="btn btn-primary" data-toggle="modal" id="addidea">
                        + New Idea
                     </button>
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
                        <h6 class="card-subtitle mb-2 text-muted fw-bold">{{$idea->anonymous == 1 ? 'Anonymous' :
                           $idea->name}}
                           <img src="images/ironman.png" id="userimg">
                        </h6>
                        <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                     </div>
                     <br>
                     <p class="card-text ideascontent">{{$idea->idea}}</p>
                     <button type="button" class="btn btn-secondary view-btn" data-toggle="modal" id="view"
                        data-target="#view_idea_modal" data-id="{{ $idea->id }}">View</button>

                     <small style="float: right; margin: 10px">23 Views</small>
                  </div>
                  <div class="card-footer">
                     <div>
                        <button id="like" class="btn like btn-warning btn-sm" style="margin:1px;"><span
                              class="bx bx-like" aria-hidden="true"></span><span class="likes"
                              id="likeValue"></span></button>
                        <button id="dislike" class="btn dislike btn-danger btn-sm" style="margin:1px;"><span
                              class="bx bx-dislike" aria-hidden="true"></span><span class="dislikes" id="dislikeValue"
                              enabled='false'></span></button>
                        <small style="float: right; margin: 10px">78 Comments</small>
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
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     <label for="">Category Name:</label>
                     <div id="newtask">
                        <input type="text" class="form-control" id="" placeholder="Please enter category name" required>
                     </div>
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
            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="addC">Add</button>
         </div>
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
                           <input type="text" placeholder="Start date" aria-label="First name"
                              class="form-control start-date">
                           <input type="text" placeholder="End date" aria-label="Last name"
                              class="form-control end-date">
                        </div>
                     </div>
                  </div>
               </div><br>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" id="createtitle">Create</button>
            </div>
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
                           <label for="">Name:</label>
                           <input type="text" class="form-control" id="name" name="name"
                              placeholder="Please enter name">
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Subject:</label>
                           <input type="text" class="form-control" id="subject" name="subject"
                              placeholder="Please enter subject">
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Idea:</label>
                           <textarea name="idea" class="form-control" rows="3"
                              placeholder="Creative Ideas, Creative DISCUSS.ION."></textarea>
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



   {{---------------------------- View Idea Modal ----------------------------}}

   @foreach($ideas as $index => $idea)
   <div class="modal fade" id="view_idea_modal" tabindex="-1" aria-labelledby="viewModallLabel"
      aria-hidden="true">
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
                           <h6 class="mb-2 text-muted fw-bold">{{$idea->anonymous == 1 ? 'Anonymous' : $idea->name}}
                              <img src="images/ironman.png" id="userimg">
                           </h6>
                           <button type="button" class="btn btn-info btn-sm" disabled>IT Department</button>
                           <br><br>
                           <small>{{$idea->created_at}}</small>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12 d-flex justify-content-center" id="photosec">
                        <a href="{{'images/idea/' .$idea->photo}}" target="_blank">
                           <img width="100%" class="img-fluid" src="{{'images/idea/' .$idea->photo}}" id="pictureshow">
                        </a>
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
                  <button class="btn like btn-warning" style="margin:1px;"><span class="bx bx-like"
                        aria-hidden="true"></span> Like <span class="likes">0</span></button>
                  <button class="btn dislike btn-danger" style="margin:1px;"><span class="bx bx-dislike"
                        aria-hidden="true"></span> Dislike <span class="dislikes">0</span></button>
                  <small style="float: right; margin: 10px">13 Views</small>
                  <small style="float: right; margin: 10px">78 Comments</small>
               </div>
            </div>
            <hr />
            <div class="container">
               <div class="modal-body" id="footersec">
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
               </div>
               <br><br>

               <div class="container" id="comment-section">

                 
               </div>
               <br>
            </div>
         </div>
      </div>
   </div>
   @endforeach



   <script>
      //pass id to controller to display comment of the clicked idea
      $('.view-btn').click(function () {
         const id = $(this).attr('data-id');

         $.ajax({
            url: 'homepage/comment_details/' + id,
            type: 'GET',
            data: { "id": id },
            success: function (data) {
               console.log(data);

               var commentcontainer = document.getElementById('comment-section');
               commentcontainer.innerHTML="";
               var name = "";
               for (var i = 0; i < data.length; i++) {

                   if(data[i].anonymous == 0)
                   {
                      name = data[i].name;
                   }
                   else
                   {
                      name = "Anonymous";
                   }
               commentcontainer.innerHTML+='<div class="container"><div class="row" id="viewcommentsec"><div class="col-md-1"><img src="images/profile3.png" style="object-fit:contain;width:100%;height:100%" class="commentimg"></div><div class="col-md-11"><h6 class="mb-2 text-muted fw-bold" class="comment-username">'+ name+'</h6><h6 class="comment-content">'+data[i].comment+'</h6><small><span class="comment-dt">'+data[i].created_at+'</span></small></div></div></div><br>';
               }
            }
         })
      });

      function setLikeText(id, newvalue) {
         var s = document.getElementById(id);
         s.innerHTML = newvalue;
      }

      function setDislikeText(id, newvalue) {
         var s = document.getElementById(id);
         s.innerHTML = newvalue;
      }

      window.onload = function () {
         setLikeText("likeValue", 0);
         setDislikeText("dislikeValue", 0);
      }

      var currentLike = document.getElementById("likeValue").textContent;
      var currentDislike = document.getElementById("dislikeValue").textContent;

      $('#like').click(function () {
         console.log(currentLike);
         console.log(currentDislike);

         if (currentLike > 0) {
            setLike("likeValue", 0);
         }

         else {
            setLikeText("likeValue", 1);
            setDislikeText("dislikeValue", 0);
         }

      });


      $('#dislike').click(function () {
         if (currentDislike > 0) {
            setDislikeText("dislikeValue", 1);
         }
         else {
            setDislikeText("dislikeValue", 1);
            setLikeText("likeValue", 0);
         }
      });



      //Create Category Show
      document.querySelector('#addC').onclick = function () {
         if (document.querySelector('#newtask input').value.length == 0) {
            alert("Please Enter a Task")

         }
         else {//This is the function part
            document.querySelector('#tasks').innerHTML += `
            <div class="task">
<div id="accordion-1" class="accordion" role="tablist" style="width: 500px; >
    <div class="accordion-item">
        <h2 class="accordion-header" role="tab" style="width: 500px;">
          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">#${document.querySelector('#newtask input').value}
  <span class="position-absolute top-10 start-100 translate-middle p-1 bg-warning rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                      </span>
                   </button>
  </button>
  </h2>

</div>
</div>
<button class="delete">
                    <i class="far fa-trash-alt"></i>
                </button>
               
            </div>

        `;
            var current_tasks = document.querySelectorAll(".delete");
            for (var i = 0; i < current_tasks.length; i++) {
               current_tasks[i].onclick = function () {
                  this.parentNode.remove();
               }
            }

            var tasks = document.querySelectorAll(".task");
            for (var i = 0; i < tasks.length; i++) {
               tasks[i].onclick = function () {
                  this.classList.toggle('completed');

               }
            }

            document.querySelector("#newtask input").value = "";
         }
      }
   </script>

   @endsection