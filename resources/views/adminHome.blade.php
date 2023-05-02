




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

<body>

  <!-- ======= Header ======= -->
         @include('includes/header')
   <!-- ======= End Header ======= -->

  <!-- ======= Sidebar ======= -->
        @include('includes/sidebar')
       
  <!-- End Sidebar-->

 <main id="main" class="main">

    
    <section class="section contact">

      <div class="row offset-1" style="margin-top: 50px">

        <div class="col-md-12 offset-1 "  >

          <div class="row" >
            <div class="col-lg-3">
              <div class="info-box card"  style='color:#010918'>
              <i class="bi bi-people" style=" font-size:30px;color:green"></i><span><h2><b>Utilisateurs</b></h2></span>
                 

          <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM utilisateurs ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3>" . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>  

          
               
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-box card"  style='color:#010918'>
              <i class="bi bi-watch" style=" font-size:30px;color:green"></i><h2><b>Reservations</b></h2></span>
                

          <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM reservations ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3> " . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>
                
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-box card"  style='color:#010918'>
                <i class="bi bi-people" style=" font-size:30px;color:green"></i><span><h2><b>Laveurs</b></h2></span>
                
                    <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM laveurs ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3>" . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>
                
              </div>
            </div>
            
          </div>

          <div class="row">
            <div class="col-lg-3">
              <div class="info-box card"  style='color:#010918'>
              <i class="bi bi-truck" style=" font-size:30px;color:green"></i><span><h2><b>Vehicules</b></h2></span>
              
                  <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM vehicules ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3>" . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>
               
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-box card" style='color:#010918'>
              <i class="bi bi-cash" style=" font-size:30px;color:green">&nbsp;</i><span><h2><b>Lavages</b></h2></span>
                
                    <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM lavages ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3>" . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>
                
              </div>
            </div>
            <div class="col-lg-3">
              <div class="info-box card"  style='color:#010918'>
              <i class="bi bi-map" style=" font-size:30px;color:green"></i><span><h2><b>Plannings</b></h2></span>
                
                    <?php  

            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "bd_laverie";

            $connect = mysqli_connect($host, $user, $password, $db);

             $recherche="SELECT count(*) FROM plannings ";

              $select=mysqli_query($connect,$recherche);

               foreach (mysqli_fetch_all($select,MYSQLI_ASSOC) as $row)
                {

                   echo "<tr>";
                   echo "<td><h3>" . $row ['count(*)'] ."</h3></td>";
                   echo "</tr>";

                }

 

            ?>
                
              </div>
            </div>
            
          </div>


        </div>


      </div>
      
        

        
    </section>

     <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">


    
  <!-- ======= add user modal ======= -->

    @include('Utilisateur/create')
    @include('Vehicule/create')   
    @include('Lavage/create') 
    @include('Laveur/create')
    @include('Planning/create')
    
    
  <!-- ======= End add user modal ======= -->

              </div>
          </div>
    </div>
       
   


                      

                 


       
                 

  </main>
  
    <!-- ===== footer ===== -->
        @include('includes/footer')
    <!-- ===== footer ===== -->


 
  <!-- Vendor JS Files -->
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
<!-- 
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span></span></strong>By ivandjatche
    </div>
   
  </footer> -->

</html>