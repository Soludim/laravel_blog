 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
   <div class="container">
     <a class="navbar-brand" href="/">Soludim blog</a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       Menu
       <i class="fas fa-bars"></i>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="/">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/about">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/contact">Contact</a>
         </li>

         <ul class="nav navbar-nav ml-auto">
           @if (!Auth::user())
           <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="modal" data-target="#auth_modal" id="trigger_auth">
               Login
             </a>
           </li>
           @else
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
               Hi {{ Auth::user()->name }}
             </a>
             <div class="dropdown-menu">
               <a class="nav-link dropdown-item" href="">My Profile</a>
               <a class="nav-link dropdown-item" href="#" onclick="
             event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
               </form>
             </div>
           </li>
           @endif
         </ul>
       </ul>
     </div>
   </div>
 </nav>