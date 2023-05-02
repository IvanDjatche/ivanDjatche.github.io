
<div class="modal fade" id="ModalEditVehicule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
       
                      
                    
          <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation" novalidate name="formulaire" method="POST" action="{{route('Vehicule.update',$vehicules)}}">
              {{ csrf_field() }}
                   @method('PUT')
                   
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">          
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">UpdateVehicule</b></h5>
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
                      <input type="text" hidden name="Vehi_id" id="Vehi_id">
                    <div class="col-12">
                      <label for="Immatriculation" class="form-label">Immatriculation</label>
                      <input type="text" name="Immatriculation" class="form-control" id="Immatriculation" required="">
                      <div class="invalid-feedback">Please, enter your num immatriculation!</div>
                    </div>

                    <div class="col-12">
                      <label for="Marque" class="form-label">Marque</label>
                      <input type="text" name="Marque" class="form-control" id="Marque" required="">
                      <div class="invalid-feedback">Please, enter your Mark!</div>
                    </div>

                    <div class="col-12">
                      <label for="Model" class="form-label">Model</label>
                      <input type="text" name="Model" class="form-control" id="Model" required="">
                    
                    </div>
                    <div class="col-12">
                      <label for="Couleur" class="form-label">Couleur</label>
                      <input type="text" name="Couleur" class="form-control" id="Couleur" required="">
                    
                    </div>

                    <div class="col-12">
                      <label for="NombreRoue" class="form-label">NombreRoue</label>
                      <input type="number" name="NombreRoue" class="form-control" id="NombreRoue" required="">
                   
                    </div>


                    <div class="col-12">
                      <label for="NombrePortiere" class="form-label">NombrePortiere</label>
                      <input type="number" name="NombrePortiere" class="form-control" id="NombrePortiere" required="">
                   
                    </div>

                      <div class="col-sm-10 offset-8 cs ">
                         <button type="submit" name="submit" class="btn btn-success col-md-5">Modify</button>
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
      </div>