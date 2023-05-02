
<div class="modal fade " id="ModalEditReserv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
                  
                    
          <div class="container ">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation" novalidate name="formulaire" method="POST" action="{{route('Reservation.update',$reservations)}}">
              {{ csrf_field() }}
              @method('PUT')
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">

                  <div class="pt-4 pb-2 ">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">ValidateReservation</b></h5>
                    @if(count($errors) > 0)

                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                      <hr class="">

                      <input type="text"hidden class="form-control" name="Reserv_id" id="Reserv_id" value="">

                    <div class="col-12">
                      <label for="DateReservation" class="form-label">DateReservation</label>
                      <input type="date" name="DateReservation" class="form-control" id="DateReservation">
                      <div class="invalid-feedback">Please, enter the date!</div>
                    </div>

                
                    <div class="col-12">
                      <label for="TypeVehicule" class="form-label">TypeVehicule</label>
                    <select name="TypeVehicule" class="form-control" id="TypeVehicule"><option value="Moto">Moto</option>
                                                                                <option value="Voiture">Voiture</option>
                                                                                <option value="Camion">Camion</option>
                                                                                <option value="Bus">Bus</option>
                                                                              </select>
                    </div>



                    <div class="col-12">
                      <label for="TypeLavage" class="form-label">TypeLavage</label>
                    <select name="TypeLavage" class="form-control" id="TypeLavage"><option value="demi">Demi-Lavage</option>
                                                                                   <option value="complet">Lavage-Complet</option>
                                                                               
                                                                              </select>
                    </div>


                     <div class="col-12">
                      <label for="MarqueVehicule" class="form-label">MarqueVehicule</label>
                      <input type="text" name="MarqueVehicule" class="form-control" id="MarqueVehicule">
                      <div class="invalid-feedback">Please, enter the Mark!</div>
                    </div>

                  

                     <div class="col-12">
                      <label for="Immatriculation" class="form-label">Immatriculation</label>
                      <input type="text" name="Immatriculation" class="form-control" id="Immatriculation">
                      <div class="invalid-feedback">Please, enter the Immatriculation!</div>
                    </div>

                      <div class="col-12">
                      <label for="Email" class="form-label">Email</label>
                      <input type="email" name="Email" class="form-control" id="Email">
                      <div class="invalid-feedback">Please, enter your mail!</div>
                    </div>
  
                      <div class="col-sm-10 offset-8 cs ">
                     
                         <button class="btn btn-success col-md-4">valider</button>
                      
                                
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                   
                  </form>

                </div>
              </div>

            </div>
          </div>
          </div>

<!-- end add user modal  -->