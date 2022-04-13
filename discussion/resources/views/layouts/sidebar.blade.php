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

        <!-- Datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <script charset="utf8" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

        <!-- Toggle button -->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

        <!-- Bootstrap 5 -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script charset="utf8" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Own -->
        <link href="{{ URL::asset('css/sidebar.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('js/sidebar.js') }}" type="module"></script>

    </head>

   <body id="header">
    <header class="header" id="body-pd">
         <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
         </div>
         <div>
            <h4>@yield ('title')</h4>
         </div>
         <div>
         </div>
      </header>
      <div class="l-navbar" id="nav-bar">
         <nav class="nav">
            <div>
               <a href="#" class="nav_logo">
                  <img src="/images/logo.png" style="width:30px">
                  <span class="nav_logo-name">DISCUSS.ION</span>
               </a>
               <div class="nav_list">
               @if($LoggedUserInfo->position == 'manager' )
                  <a href="dashboard" class="nav_link">
                     <i class='bx bx-grid-alt nav_icon'></i>
                     <span class="nav_name">Dashboard</span>
                  </a>
               @endif
                  <a href="homepage" class="nav_link"> 
                     <i class='bx bx-home nav_icon'></i>
                     <span class="nav_name">Home</span>
                  </a>
                  @if($LoggedUserInfo->position == 'coordinator' || "manager"))
                  <a href="usercontrol" class="nav_link">
                     <i class='bx bxs-user-badge nav_icon'></i>
                     <span class="nav_name">Users Control</span>
                  </a>
                  @endif
               </div>
            </div>
            <form>
            <a href="profile" class="nav_link">
               <img src="/images/ironman.png" class="userimg">
               <div>
                  <br>
                  <span class="nav_name" style="font-size:12px">{{ $LoggedUserInfo['name'] }}</span>
                  <p class="nav_name" style="font-weight:bold">{{ $LoggedUserInfo['position']}}</p>
               </div>
            </a>
            <a href="{{ route('auth.logout') }}" class="nav_link">
               <i class='bx bx-log-out nav_icon'></i>
               <span class="nav_name">Logout</span>
            </a>
            </form>
         </nav>
      </div>

      <div class="content">
         @yield ('usercontrolcontent')
         @yield ('profilecontent')
         @yield ('homepage')
         @yield ('dashboard')
         @yield ('category')
      </div>



{{---------------------------- Toast ----------------------------}}
<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
   <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
     <div class="toast-header">
       <strong class="mr-auto">Bootstrap</strong>
       <small>11 mins ago</small>
       <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="toast-body">
       Hello, world! This is a toast message.
     </div>
   </div>
 </div>

    </body>
</html>


<script type="text/javascript">
   $(document).ready(function() {
      $('.nav_link').each(function(i, obj) {
         if (window.location.href.indexOf($(this).attr('href')) > -1) {
         $(this).addClass('active');
      }
      });
      
   })
</script>
