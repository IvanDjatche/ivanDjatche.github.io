

  
    <header id="header" class="header fixed-top d-flex align-items-center">

<div class="title">WASH 🧼🧽🚗 AUTO</div>

<div class="d-flex align-items-center justify-content-between">

<i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">

  <li class="nav-item d-block d-lg-none">
    <a class="nav-link nav-icon search-bar-toggle " href="#">
      <i class="bi bi-search"></i>
    </a>
  </li><!-- End Search Icon-->

  


      
<!-- client hearder -->
@if ($auth_role == 'clients')
  <li class="nav-item" style="margin-top: 12px">
   <a class="nav-link collapsed" href="#" data-target="#exampleModalCenterReservation" data-toggle="modal"  data-bs-target="#components-nav">  
    &nbsp;&nbsp;&nbsp;&nbsp; 

           <span><P><B>Reserver Ici</B></P></span>
         
    </a>
  
</li>


   <li class="nav-item" style="margin-top: 12px">
  <a class="nav-link collapsed" href="{{route('Planning.index')}}">  
    &nbsp;&nbsp;&nbsp;&nbsp; 

           <span><P><B>Consulter les Planning</B></P></span>
         
  </a>
  
</li>

<li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-bell"></i>
  <span class="badge bg-primary badge-number"></span>
</a><!-- End Notification Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
  <li class="dropdown-header">
  
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2"></span></a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

 

</ul><!-- End Notification Dropdown Items -->

</li><!-- End Notification Nav -->

<li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-chat-left-text"></i>
  <span class="badge bg-success badge-number"></span>
</a><!-- End Messages Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
  <li class="dropdown-header">
    
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2"></span></a>
  </li>
    <li>
    <a href="#"></a>
  </li>

</ul><!-- End Messages Dropdown Items -->

</li><!-- End Messages Nav -->

<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
{{ Auth::user()->Nom }}
{{ Auth::user()->Prenom }}
  <span class="d-none d-md-block dropdown-toggle ps-2">
  





  </span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

  <li class="dropdown-header">
  {{ Auth::user()->Role }}
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="">
      <i class="bi bi-person"></i>
      <span>My Profile</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="">
      <i class="bi bi-gear"></i>
      <span>Account Settings</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

@elseif ($auth_role == 'admin')

<li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-bell"></i>
  <span class="badge bg-primary badge-number"></span>
</a><!-- End Notification Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
  <li class="dropdown-header">
  
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2"></span></a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

 

</ul><!-- End Notification Dropdown Items -->

</li><!-- End Notification Nav -->

<li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-chat-left-text"></i>
  <span class="badge bg-success badge-number"></span>
</a><!-- End Messages Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
  <li class="dropdown-header">
    
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2"></span></a>
  </li>
    <li>
    <a href="#"></a>
  </li>

</ul><!-- End Messages Dropdown Items -->

</li><!-- End Messages Nav -->

<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
{{ Auth::user()->Nom }}
{{ Auth::user()->Prenom }}
  <span class="d-none d-md-block dropdown-toggle ps-2">
  





  </span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

  <li class="dropdown-header">
  {{ Auth::user()->Role }}
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="">
      <i class="bi bi-person"></i>
      <span>My Profile</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="">
      <i class="bi bi-gear"></i>
      <span>Account Settings</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

@else

 


@endif

 





     

    </ul><!-- End Notification Dropdown Items -->

  </li><!-- End Notification Nav -->



 
    

</ul>
</nav><!-- End Icons Navigation -->

</header>