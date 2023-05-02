



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lavage</title>
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
    
  <!-- ======= update user modal ======= -->

  <section class="section">
      <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <form name="formulaire" class="col-8 offset-6"   method="GET" action="{{route('Lavage.index')}}" >
                  <div  style=' margin-top:-35px;margin-left:8px' class="form-group ">
                   <input type="search" name="search" class="form-control" placeholder="search..."  value ="{{$search}}"/>
                  </div>
                  <div class="col-md-3 offset-8">
                    <button class="btn btn-primary" style=' margin-top:-60px;font-size:12px'><b>Search...</b></button>
                </div>
              </form>
            @if (session('status'))
             <div class="alert alert-success">{{ session('status') }}</div>
            @endif
           
           
               <table class="table table-dark" style="font-family: cursive; font-size:15px;margin-top:30px">
                
               <tr>
                    <th scope="col">id</th>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                     <th scope="col">Montant</th>
                    <th scope="col">Duree</th>
                    <th scope="col">Nom_Laveur</th>
  
                    <tbody>

            @if ($nbr_lavage==0)

                   <h5 style="color:green">{{__("Aucune Donnée disponible")}}</h5>

                @else
                     @foreach ($lavages as $lavages)

                        <tr class="table table-dark" style="font-family: sans-serif; font-size: 11px">
                          <th>{{$lavages->idLavage}}</th>
                          <th>{{$lavages->DateLavage}}</th>
                          <th>{{$lavages->Type}}</th>
                          <th>{{$lavages->Montant}}</th>
                          <th>{{$lavages->Duree}}</th>
                          <th>{{$lavages->NomLaveur}}</th>

                          <th>
                          
                            <a href="#"><button class="btn btn-success edit_btn_lavage offset-1"  style='margin-left:-35px;font-size:10px' data-target="#" data-id="{{$lavages->idLavage}}" data-toggle='modal'>Update</button></a>
                          
                          </th>
                          <th>
                            <form action="{{route('Lavage.destroy',$lavages->idLavage)}}" method="post">
                              @csrf
                              @method('DELETE')
                               <button type="submit" class="btn btn-danger offset" style='margin-left:-72px;font-size:10px' onclick="return confirm('Voulez-Vous Vraiment supprimer  Cette Donnée')">Delete</button>
                            </form>
                          </th>
                        </tr>

                      @endforeach
              @endif
                   </tbody>
                    
                  </tr>
                   
                    
             </table>
            </div>
          </div>

        </div>
      </div>
    </section>

     <!-- ===== modalEdit ===== -->
            
     @include('Lavage.edit')
            
      <!-- ===== End modalEdit ===== -->

      <!-- ======= add user modal ======= -->

            @include('Utilisateur/create')
            @include('Vehicule/create')   
            @include('Lavage/create')
            @include('Laveur/create') 
            @include('Planning/create') 
    
    
           <!-- ======= End add user modal ======= -->

  </main>
  
    <!-- ======= Footer ======= -->
    

  
  <!-- End #main -->

  
  <!-- ======= Footer ======= -->


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
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>


    <script>

        $(document).ready(function () {


              $('.edit_btn_lavage').on('click', function () {

                  $('#ModalEditLavage').modal('show');

                  $tr = $(this).closest('tr');

                        var uplavag = $tr.children("th").map(function() {
                          return $(this).text();
                        }).get();

                    console.log(uplavag);
                    $('#Lavage_id').val(uplavag[0]);
                    $('#DateLavage').val(uplavag[1]);
                    $('#Type').val(uplavag[2]);
                    $('#Montant').val(uplavag[3]);
                    $('#Duree').val(uplavag[4]);
                    $('#NomLaveur').val(uplavag[5]);
               
                

              });

        });

    </script>


</body>

  
</html>