<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DISCUSS.ION</title>

        <!-- All format -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <!-- Sidebar slide -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

        <!-- Bootstrap 5 -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
        <script charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

        <!-- Toggle button -->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

        <!-- Styles -->
        <style>
           @import url("https://fonts.googleapis.com/css?family=Montserrat:wght@400;600;700&display=swap");

         :root {
            --header-height: 3rem;
            --nav-width: 78px;
            --first-color: #3C3541;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Montserrat';
            --normal-font-size: 1rem;
            --z-fixed: 100
         }

         *,
         ::before,
         ::after {
            box-sizing: border-box
         }

         body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s
         }

         a {
            text-decoration: none
         }

         .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
         }

         .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer
         }

         .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
         }

         .header_img img {
            width: 40px
         }

         .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
         }

         .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
         }

         .nav_logo,
         .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
         }

         .nav_logo {
            margin-bottom: 2rem
         }

         .nav_logo-name {
            color: var(--white-color);
            font-weight: 700;
            font-size: 1.25rem
         }

         .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
         }

         .nav_link:hover {
            color: var(--white-color)
         }

         .nav_icon {
            font-size: 1.5rem
         }

         .nav_logo-icon {
            font-size: 2rem;
            color: var(--first-color-light)
         }

         .show {
            left: 0
         }

         .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
         }

         .active {
            color: var(--white-color)
         }

         .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
         }

         .height-100 {
            height: 100vh
         }

         @media screen and (min-width: 768px) {
            body {
               margin: calc(var(--header-height) + 1rem) 0 0 0;
               padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
               height: calc(var(--header-height) + 1rem);
               padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
               width: 40px;
               height: 40px
            }

            .header_img img {
               width: 45px
            }

            .l-navbar {
               left: 0;
               padding: 1rem 1rem 0 0
            }

            .show {
               width: calc(var(--nav-width) + 156px)
            }

            .fade {
               width: 100%
            }

            .body-pd {
               padding-left: calc(var(--nav-width) + 188px)
            }
         }
        </style>

    </head>

    <body id="header">
      
    <header class="header" id="body-pd">
         <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
         </div>
         <div>
            <h4>User Control</h4>
         </div>
         <div>
            <i class='bx bx-bell' style="font-size: 1.5rem;"></i>
         </div>
      </header>
      <div class="l-navbar" id="nav-bar">
         <nav class="nav">
            <div>
               <a href="#" class="nav_logo">
                  <i class='bx bxs-message-alt-dots nav_logo-icon'></i>
                  <span class="nav_logo-name">DISCUSS.ION</span>
               </a>
               <div class="nav_list">
                  <a href="#" class="nav_link active">
                     <i class='bx bx-grid-alt nav_icon'></i>
                     <span class="nav_name">Dashboard</span>
                  </a>
                  <a href="#" class="nav_link"> 
                     <i class='bx bx-home nav_icon'></i>
                     <span class="nav_name">Home</span>
                  </a>
                  <a href="#" class="nav_link">
                     <i class='bx bxs-user-badge nav_icon'></i>
                     <span class="nav_name">Users Control</span>
                  </a>
               </div>
            </div>
            <form>
            <a href="#" class="nav_link">
               <i class='bx bx-log-out nav_icon'></i>
               <span class="nav_name">Logout</span>
            </a>
            <a href="#" class="nav_link">
               <i class='bx bx-log-out nav_icon'></i>
               <span class="nav_name">Logout</span>
            </a>
            </form>
           
         </nav>
      </div>

      <!-- ----------------------------------------Content---------------------------------------- -->
      <br><br>
      <div class="content">
         <div>
         @yield ('button')
      </div>
         <div class="container">
            <div class="form-row">
               <div class="form-group col-md-12">
                  <table class="table table-striped table-bordered table-hover horizontal-scrollable" id="stockadjtable">
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
                  <button type="button" class="btn btn-primary" id="createu">Create</button>
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

    </body>

    


</html>

<script>
   document.addEventListener("DOMContentLoaded", function(event) {

      const showNavbar = (toggleId, navId, bodyId, headerId) =>{
      const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId)

      // Validate that all variables exist
      if(toggle && nav && bodypd && headerpd){
      toggle.addEventListener('click', ()=>{
      // show navbar
      nav.classList.toggle('show')
      // change icon
      toggle.classList.toggle('bx-x')
      // add padding to body
      bodypd.classList.toggle('body-pd')
      // add padding to header
      headerpd.classList.toggle('body-pd')
      })
      }
      }

      showNavbar('header-toggle','nav-bar','body-pd','header')

      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')

      function colorLink(){
      if(linkColor){
      linkColor.forEach(l=> l.classList.remove('active'))
      this.classList.add('active')
      }
      }
      linkColor.forEach(l=> l.addEventListener('click', colorLink))

      // Your code to run since DOM is loaded and ready
   });

</script>

<script>
   var t = $('#stockadjtable').DataTable({//call table id

      //retrieve: true,
      //scrollCollapse: true,
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

   $('#createu').on( 'click',function () {
      $("#successModal").modal("show");
   });

   $('#createu').on( 'click',function () {
      $("#exampleModal").modal("hide");
   });

</script>
