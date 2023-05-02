<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
 
  

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="conteneur d1 d2">

  <!-- ======= Header ======= -->
        @include('includes/header')
      <!-- ====== Header ====== -->

      <!-- ======= Sidebar ======= -->
         @include('includes/sidebar')
  <!-- ======== End Sidebar =======-->


 <main id="main" class="main">
           
     <div class="container-fluid">


      <!-- message user -->
          <div  class="alert alert-success" style = "width:425px">
              <h6><p>Welcome Mr/Mme {{ Auth::user()->Nom }} your loged with-to {{ Auth::user()->Role }} </p></h6>
          </div>
      <!-- end message user -->

    <!-- verification error -->
            <div style=" margin-top:-80px">
                @if(count($errors) > 0)

                <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                @if (session('status'))
                  <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
    <!-- end verification error -->

    <!-- content -->
   

<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card"  style ="height:540px; margin-top: 70px">

                          <div class="card-boody">
                          <div class="row">
                            <div class="col-md-6">
                                 <div class="presentation">
                                     <h3 ><b>Lavez votre voiture aussi souvent <br> &nbsp;&nbsp; que vous le désirez !</b></h3>
                                     <p class="text">
                                      L'application WASH-Auto : <br> &nbsp;&nbsp;la solution de paiement <br> &nbsp;&nbsp;en ligne pour une voiture <br>&nbsp;&nbsp;&nbsp;propre au Cameroun
                                     </p>
                                  </div>
                                </div>
                              </div>
                                  <div class="row">
                                  <div class="col-md-6">  
                                 <div class= "anim">
                                  
                                  <img  src="{{asset('assets/img/anim.gif')}}"></img>
                                 </div>
                                </div>
                              </div>
                                
                             
                            
                          </div>
                         </div>
                       </div>  
    </div>  
  </div>
                      <div class="row justify-content-center" style ="margin-top:15px">

                              <div class="col-md-6">
                                    <div class="card"  style ="height:540px;">

                                        <div class="card-boody">

                                            <div class="description">
                                                
                                                <p class="text"><a>
                                                   L'application WASH-Auto est Votre solution web pour un véhicule éclatant de proprété A tout moment.<br><br>
                                                   il vous suffit juste de passer la reservation de lavage-auto directement dans l'application et de selectionner le lavage à l'unité ou le forfait.<br>
                                                   apres soumission d'une reservation vous recevrez un message de l'administrateur confirmant votre reservation. <br><br> vous avez egalement la possibilité de passer une reservationen fonction des plannings de Lavage
                                                   disponible que vous pourez egalement le consulter.
                                                   
                                                    </a>
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                              </div>

                              <div class="col-md-6">
                                    <div class="card"  style ="height:540px; background-color:black">

                                        <div class="card-boody telecharger">
                                            
                                        
                                              <a href="#">
                                                <i class = "bi bi-download">

                                                </a></i>&nbsp;&nbsp; <span><u>Télécharger</u></span></br>
                                         
                                                <a href="https://apps.apple.com/fr/app/apple-store/id375380948">

                                                  <img src="{{asset('assets/img/appStore1.png')}}"></img>
                                                
                                                </a>
                                                <a href="https://play.google.com/store/apps?hl=fr&gl=US&pli=1">
                                                  <img  src="{{asset('assets/img/playStore1.jpg')}}" ></img>
                                            
                                                </a>

                                        </div>
                                    </div>

                              </div>
                      </div>

                      <div class="col-md-12">

                          <div class="card"  style ="height:540px; margin-top:30px; background-color:black">

                             <div class="card-boody">
                                <div class="row titre">
                                  <div class="col-md-8">
                                   <h4>Tout est dit dans le nom – <br>&nbsp;&nbsp;&nbsp;  Vos avantages avec EasyCarWash :</h4></br>
                                </div>
                                
                              </div>
                                  <div class="row">
                                     <div class="col-md-4 one">
                                            <h5 style="color:yellow">Gain de temps</h6>
                                              <p>Vérifiez directement,
                                                grâce à la <br>fonction caméra,
                                                le nombre de <br>voitures dans
                                                la file d’attente et<br> payez
                                                directement via <br> l’application
                                              </p> 
                                              
                                           


                                       
                                            <h5 style="color:yellow">Pratique</h6>
                                              <p>Sélectionnez dans
                                                l’application le <br>programme
                                                de lavage souhaité
                                              </p>
                                      </div>
                                  
                                    <div class="col-md-4 two">
                                              
                                            <h5 style="color:yellow">Qualité maximale</h6>
                                              <p>Bénéficiez des portiques de
                                                  lavage <br> du leader du marché
                                              </p>
                                               
                                              <h5 style="color:yellow">Paiement par carte bancaire & <br> sans contact</h6>
                                              <p>Paiement sécurisé et simple<br>
                                                  directement dans l’application
                                              </p>
                                    </div>
                                    
                                   
                                      <div class="col-md-4 paiement">
                                       <h4><b>Mode de Paiement Rapide:</b></h4>
  
                                                <a href="https://www.orange.cm/fr/applications/orange-money.html">

                                                  <img src="{{asset('assets/img/Orange.png')}}"></img>
                                                
                                                </a>

                                                <a href="https://mobilemoney.mtncameroon.net/MoMoWebAppMTNCameroon/">

                                                  <img  src="{{asset('assets/img/MTN.png')}}" ></img>
                                            
                                                </a>
                                     </div>
                                   
   

                                  </div>

                                 
                                </div>

                                
                          </div>
                          
              </div>

    <!-- end content  -->
                      

          </div>
                      

      <!-- ====== footer ====== -->
         @include('Reservation/create')
       <!-- ====== end footer ===== -->

  </main>

    <!-- ====== footer ====== -->
        @include('includes/footer')
    <!-- ====== end footer ===== -->
  



 
  <!-- ===== Vendor JS Files ===== -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.livequery.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script >

  $('#exampleModalCenter').on('shown.bs.modal', function() 
  {

     $('#myInput').trigger('focus') 
  }) 

  //  $('#exampleModalCenter').on('shown.bs.modal', function() 
  // {

  //    $('#myInput').trigger('focus') 
  // })

  // $('#exampleModalCenter1').on('shown.bs.modal', function() 
  //   {

  //      $('#myInput').trigger('focus') 
  //   }) 
    

</script>






</body>

</html>