<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <link rel="stylesheet" href="{{asset('css/Font-Awesome-master/css/all.css')}}">
      @yield('css')
      <title>Admin Page</title>
   </head>
   <body>
      {{-- NAVIGATION BAR TOP --}}
      <!-- navbar start -->
      <div class="container-fluid p-0">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand p-1" href="/">Home</a>
            <div class="dropdown logout">
               <a class="dropdown-toggle mr-md-2 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class='fa fa-user text-white'></i>
               </a>
               <div class="dropdown-menu dropdown-menu-md-right mt-3" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Setting</a>
                  <a class="dropdown-item" href="{{ url('/auth/logout') }}">Logout</a>
               </div>
            </div>
         </nav>
      </div>
      <!-- navbar end -->
      {{-- SIDEBAR AND CONTENT --}}
      <div class="container-fluid p-0">
         <div class="row">
            {{-- SIDEBAR --}}
            <div class="col-sm-2">
               {{-- sidebar start --}}
               <nav class="sidebar mt-5 col-sm-2 bg-dark"  id="sidebar">
                  <ul class="list-unstyled m-0">
                     <!-- Search Bar -->
                     <li>
                        <form class="form-inline search">
                           <input class="w-100 form-control m-3" type="search" placeholder="Search" aria-label="Search">
                        </form>
                     </li>
                     <!-- dashboard -->
                     <li>
                        <a class="d-block" href="/admin" role="button"><span><i class="fas fa-tachometer-alt"></i></span> Dashboard</a>
                     </li>
                     <!-- User -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#users" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="fas fa-user-cog"></i></span> Users<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="users" >
                        <a class="d-block" href="{{route('users.index')}}" role="button"><span><i class="pl-3 fas fa-users"></i></span> All User</a>
                     </li>
                     <li class="collapse" id="users" >
                        <a class="d-block" href="{{route('users.create')}}" role="button"><span><i class="pl-3 fas fa-user-plus"></i></span> Creat User</a>
                     </li>
                     <!-- Post -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#posts" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="far fa-newspaper"></i></span> Posts<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="posts" >
                        <a class="d-block" href="{{route('posts.index')}}" role="button"><span><i class="pl-3 fas fa-pen-square"></i></span> All Posts</a>
                     </li>
                     <li class="collapse" id="posts" >
                        <a class="d-block" href="{{route('posts.create')}}" role="button"><span><i class="pl-3 fas fa-edit"></i></span> Create Posts</a>
                     </li>
                     <li class="collapse" id="posts" >
                        <a class="d-block" href="{{route('comments.index')}}" role="button"><span><i class="pl-3 fas fa-comments"></i></span> All Comments</a>
                     </li>
                     <!-- Categories -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#cat" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="fab fa-app-store-ios"></i></span> Categories<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="cat" >
                        <a class="d-block" href="{{ route('categories.index') }}" role="button"><span><i class="pl-3 far fa-dot-circle"></i></span> All Categories</a>
                     </li>
                     <li class="collapse" id="cat" >
                        <a class="d-block" href="{{ route('categories.create') }}" role="button"><span><i class="pl-3 fas fa-plus-square"></i></span> Create Categories</a>
                     </li>
                     <!-- Media -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#media" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="fas fa-camera-retro"></i></span> Media<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="media" >
                        <a class="d-block" href="{{route('media.index')}}" role="button"><span><i class="pl-3 fas fa-photo-video"></i></span> All Media</a>
                     </li>
                     <li class="collapse" id="media" >
                        <a class="d-block" href="{{route('media.create')}}" role="button"><span><i class="pl-3 fas fa-upload"></i></span> Upload Media</a>
                     </li>
                     <!-- Charts -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="fas fa-chart-bar"></i></span> Charts<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="charts" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fas fa-chart-line"></i></span> Flot Charts</a>
                     </li>
                     <li class="collapse" id="charts" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fas fa-chart-pie"></i></span> Morris.js Charts</a>
                     </li>
                     <!-- Tables -->
                     <li>
                        <a class="d-block" href="#" role="button"><span><i class="fas fa-table"></i></span> Tables</a>
                     </li>
                     <!-- Forms -->
                     <li>
                        <a class="d-block" href="#" role="button"><span><i class="fab fa-wpforms"></i></span> Forms</a>
                     </li>
                     <!-- UI Elements -->
                     <li>
                        <a class="d-block" data-toggle="collapse" href="#ui" role="button" aria-expanded="false" aria-controls="collapseExample"><span><i class="fab fa-uikit"></i></span> UI Elements<i class="fa fa-arrow-circle-o-down float-right pr-3 pt-1"></i></a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 far fa-building"></i></span> Panels and Wells</a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fas fa-circle-notch"></i></span> Buttons</a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fas fa-bell"></i></span> Notifications</a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 far fa-keyboard"></i></span> Typography</a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fab fa-artstation"></i></span> Icons</a>
                     </li>
                     <li class="collapse" id="ui" >
                        <a class="d-block" href="#" role="button"><span><i class="pl-3 fas fa-border-none"></i></span> Grid</a>
                     </li>
                     <div class="float-bottom m-5 p-5"></div>
                  </ul>
               </nav>
               {{-- sidebar end --}}
            </div>
            {{-- CONTENT --}}
            <div class="col-sm-10 pt-5 mt-5 pl-5 content">
               @yield('content')
            </div>
         </div>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
      @yield('footer')
   </body>
</html>











