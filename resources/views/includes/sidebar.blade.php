




<aside id="sidebar" class="sidebar" style="margin-top: 8px">

   <ul class="sidebar-nav" id="sidebar-nav" style="margin-top: 15px">
    

<!-- client sidebar -->

@if($auth_role == 'clients')

          <ul class="sidebar-nav" id="sidebar-nav" style="margin-top: 160px">
                  <li class="nav-item" style="margin-top: 12px">
                      <a class="nav-link " href="{{ ('clientsHome') }}">
                        <i class="bi bi-grid active"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Accueil</span>
                      </a>
                  </li>

              <hr class="hr"><!-- End Dashboard Nav -->


                  <li class="nav-item" style="margin-top: 12px">


                    <a class="nav-link collapsed" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                          <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>

                  </li>

                <hr class="hr"><!-- End Dashboard Nav -->

                      <li class="nav-item" style="margin-top: 12px">
                          <a class="nav-link collapsed" href="#">  
                                      <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                       <span>Contact-us?</span>

                          </a>

                      </li>


          </ul>   

  <!-- end sidebar -->

  <!-- admin sidebar -->

              @elseif($auth_role == 'admin')

                <ul class="sidebar-nav" id="sidebar-nav" style="margin-top: px">
                      <li class="nav-item" style="margin-top: 12px">
                            <a class="nav-link " href="{{ ('adminHome') }}">
                                  <i class="bi bi-grid active"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <span>Dashboard</span>
                            </a>
                      </li>

              <hr class="hr"><!-- End Dashboard Nav -->

                        <li class="nav-item" style="margin-top: 12px">
                              <a class="nav-link collapsed" href="{{route('Reservation.index')}}">  
                                    <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                    <span>Reservation</span>

                              </a>

                        </li>

              <hr class="hr"><!-- End Components Nav -->

                      <li class="nav-item" >
                          <a class="nav-link collapsed"   data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">  
                                <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                <span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>

                          </a>

                        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                              <li>
                                    <a href="#" data-target="#exampleModalCenterUser" data-toggle="modal">
                                          <i class="bi bi-Save"></i><span style="color: white"><p><b>Add User</b></p></span>
                                    </a>
                              </li>
                                    <li>
                                        <a href="{{route('Utilisateur.index')}}">
                                            <i class="bi bi-Save"></i><span style="color: white"><p><b>List User</b></p></span><i class="bi bi-chevron-down ms-auto"></i>
                                        </a>
                                    </li>

                        </ul>

                      </li>


              <hr class="hr"><!-- End Forms Nav -->

              <li class="nav-item" style="margin-top: 12px">
                  <a class="nav-link collapsed"   data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">  
                      <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                      <span>Lavages</span><i class="bi bi-chevron-down ms-auto"></i>

                  </a>

                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                      <a href="#" data-target="#ModalAddLavage" class="" data-toggle="modal">
                          <i class="bi bi-Save"></i><span style="color: white"><p><b>Add Lavages</b></p></span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('Lavage.index')}}">
                          <i class="bi bi-Save"></i><span style="color: white"><p><b>List Lavages</b></p></span><i class="bi bi-chevron-down ms-auto"></i>
                      </a>
                    </li>

                </ul>

              </li>


              <hr class="hr"><!-- End Forms Nav -->

                <li class="nav-item" style="margin-top: 12px">
                    <a class="nav-link collapsed"   data-bs-target="#" data-bs-toggle="collapse" href="#">  
                        <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 
                        <span>Laveurs</span><i class="bi bi-chevron-down ms-auto"></i>

                    </a>

                  <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                      <li>
                          <a href="#" data-target="#" class="" data-toggle="modal">
                              <i class="bi bi-Save"></i><span style="color: white"><p><b>Add Laveur</b></p></span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="bi bi-Save"></i><span style="color: white"><p><b>List Laveur</b></p></span><i class="bi bi-chevron-down ms-auto"></i>
                          </a>
                      </li> 

                  </ul>

                </li>


              <hr class="hr"><!-- End Tables Nav -->

                  <li class="nav-item" >
                          <a class="nav-link collapsed"   data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">  
                            <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                            <span>Vehicules</span><i class="bi bi-chevron-down ms-auto"></i>

                          </a>

                      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                          <li>
                              <a href="#" data-target="#exampleModalCenter2" data-toggle="modal">
                                <i class="bi bi-Save"></i><span style="color: white"><p><b>Add Vehicules</b></p></span>
                              </a>
                          </li>
                          <li>
                              <a href="{{route('Vehicule.index')}}">
                                <i class="bi bi-Save"></i><span style="color: white"><p><b>List Vehicules</b></p></span><i class="bi bi-chevron-down ms-auto"></i>
                              </a>
                          </li>

                      </ul>

                  </li>

              <hr class="hr"><!-- End Tables Nav -->


                  <li class="nav-item" style="margin-top: 12px">
                      <a class="nav-link collapsed"   data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">  
                              <i class="bi bi-journal-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                              <span>Planification</span><i class="bi bi-chevron-down ms-auto"></i>

                          </a>

                      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                          <li>
                              <a href="#" data-target="#ModalAddPlanning" data-toggle="modal">
                                  <i class="bi bi-Save"></i><span style="color: white"><p><b>Add Planning</b></p></span>
                              </a>
                              </li>
                              <li>
                              <a href="{{route('Planning.index')}}">
                                <i class="bi bi-Save"></i><span style="color: white"><p><b>list Planning</b></p></span><i class="bi bi-chevron-down ms-auto"></i>
                              </a>
                          </li>

                      </ul>

                  </li>

              <hr class="hr"><!-- End Tables Nav -->


                  <li class="nav-item" style="margin-top: 12px">

                        <a class="nav-link collapsed" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf

                    </form>

                  </li>

             


              </ul>  

  <!-- end sidebar -->
  
  

      @else
     
        <ul class="sidebar-nav" id="sidebar-nav" style="margin-top:80px">
                    <li class="nav-item" style="margin-top: 12px">
                        <a class="nav-link " href="{{ __('') }}">
                            <i class="bi bi-grid active"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>Accueil</span>
                        </a>
                    </li>

                    <hr class="hr"><!-- End Dashboard Nav -->

                          <li class="nav-item" style="margin-top: 12px">
                              <a class="nav-link collapsed" href="{{ __('Register') }}" data-target="#registerUser" data-toggle="modal"  data-bs-target="#components-nav">  
                                  <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                  <span>Register</span>

                              </a>

                          </li>



                    <hr class="hr"><!-- End Dashboard Nav -->

                          <li class="nav-item" style="margin-top: 12px">
                                <a class="nav-link collapsed" href="{{ __('Login') }}" data-target="#exampleModalCenter7" data-toggle="modal"  data-bs-target="#components-nav">  
                                    <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                    <span>login</span>

                                </a>

                          </li>



                    <hr class="hr"><!-- End Dashboard Nav -->

                          <li class="nav-item" style="margin-top: 12px">
                                <a class="nav-link collapsed" href="#">  
                                      <i class="bi bi-journal-text active"></i>&nbsp;&nbsp;&nbsp;&nbsp; 

                                      <span>Contact-us?</span>

                                </a>

                          </li>

        </ul>

      @endif
</ul>
</aside>
     
 