


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
    <!-- ======= Sidebar ======= -->
    @include('includes/sidebar')
  <!-- End Sidebar-->

 <main id="main" class="main">

    
    
    <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">


      <!-- ===== error ===== -->
      <div style=" margin-top: 15px">
                @if(count($errors) > 0)

                <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                @if (session('error'))
                  <div class="alert alert-danger" style = 'font-size:20px'>{{ session('error') }}</div>
                @endif
            </div>
       

      <!-- ===== EndError ===== -->

      <!-- content -->
      @include("layouts/content")                       
      <!-- end content -->
</div>

   <!-- modal login -->
   @include('auth.login')
   <!-- End login -->

   <!-- modal register -->
   @include('auth.register')
   <!--end modal register -->
     
          </div>
        </div>
      
                      

      


     



  </main>

  <!-- footer -->

      @include('includes/footer')
     

  <!-- end footer -->

  
  



 
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

</html>