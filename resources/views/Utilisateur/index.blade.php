



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard/User</title>
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
              <form name="formulaire" class="col-8 offset-6"   method="GET" action="{{route('Utilisateur.index')}}" >
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
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">DateNaiss</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">PassWord</th>
                   
                    
                   <tbody>

                   
            @if ($nbr_user==0)

                  <h5 style="color:green">{{__("Aucune Donnée disponible")}}</h5>

              @else

             
                     @foreach ($utilisateurs as $utilisateurs)

                        <tr class="table table-dark" style="font-family: sans-serif; font-size: 11px">
                          <th>{{$utilisateurs->id}}</th>
                          <th>{{$utilisateurs->Nom}}</th>
                          <th>{{$utilisateurs->Prenom}}</th>
                          <th>{{$utilisateurs->Telephone}}</th>
                          <th>{{$utilisateurs->Ville}}</th>
                          <th>{{$utilisateurs->Adresse}}</th>
                          <th>{{$utilisateurs->Sexe}}</th>
                          <th>{{$utilisateurs->DateNaiss}}</th>
                          <th>{{$utilisateurs->email}}</th>
                          <th>{{$utilisateurs->Role}}</th>
                          <th>{{$utilisateurs->password}}</th>

                      
                          <th>
                          
                            <a href="#"><button class="btn btn-success edit_btn offset-1"  style='margin-left:-20px;font-size:10px'  data-id="{{$utilisateurs->id}}" data-toggle='modal'>Update</button></a>
                           
                          </th>
                          <th>
                            <form action="{{route('Utilisateur.destroy',$utilisateurs->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                               <button type="submit" class="btn btn-danger offset" style='margin-left:-15px;font-size:10px' onclick="return confirm('Voulez-Vous Vraiment supprimer  Cette Donnée')">Delete</button>
                            </form>
                          </th>
                        </tr>

                      @endforeach
             @endif    
                 
                   </tbody>
           </table>
            </div>
          </div>

        </div>
      </div>
    </section>

     <!-- ===== modalEdit ===== -->
            @include('Utilisateur.edit')
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

                    $('.edit_btn').on('click', function () {

                        $('#ModalEdit').modal('show');

                          $tr = $(this).closest('tr');

                                  var data = $tr.children("th").map(function() {
                                    return $(this).text();
                                   
                                  }).get();

                                console.log(data);
                                $('#idUser').val(data[0]);
                                $('#Nom').val(data[1]);
                                $('#Prenom').val(data[2]);
                                $('#Telephone').val(data[3]);
                                $('#Adresse').val(data[4]);
                                $('#Ville').val(data[5]);
                                $('#Sexe').val(data[6]);
                                $('#DateNaiss').val(data[7]);
                                $('#email').val(data[8]);
                                $('#Role').val(data[9]);
                                $('#password').val(data[10]);


                     
                     });
          


        });

  </script>

</body>

  
</html>