
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
       
                      
                    
          <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation" novalidate name="formulaire" method="POST" action="{{route('Vehicule.store')}}">
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">

        
              @csrf
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">AddVehicule</b></h5>
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
  
                    <div class="col-12">
                      <label for="Immatriculation" class="form-label">Immatriculation</label>
                      <input type="text" name="Immatriculation" class="form-control" id="" required="">
                      <div class="invalid-feedback">Please, enter your num immatriculation!</div>
                    </div>

                    <div class="col-12">
                      <label for="Marque" class="form-label">Marque</label>
                      <input type="text" name="Marque" class="form-control" id="" required="">
                      <div class="invalid-feedback">Please, enter your Mark!</div>
                    </div>

                    <div class="col-12">
                      <label for="Model" class="form-label">Model</label>
                      <input type="text" name="Model" class="form-control" id="" required="">
                    
                    </div>
                    <div class="col-12">
                      <label for="Couleur" class="form-label">Couleur</label>
                      <input type="text" name="Couleur" class="form-control" id="" required="">
                    
                    </div>

                    <div class="col-12">
                      <label for="NombreRoue" class="form-label">NombreRoue</label>
                      <input type="number" name="NombreRoue" class="form-control" id="" required="">
                   
                    </div>


                    <div class="col-12">
                      <label for="NombrePortiere" class="form-label">NombrePortiere</label>
                      <input type="number" name="NombrePortiere" class="form-control" id="" required="">
                   
                    </div>


                   

                      <div class="col-sm-10 offset-2 cs ">
                         <button type="reset" name="annuler" class="btn btn-danger  col-md-5">Annuler</button>
                         <button type="submit" name="submit" class="btn btn-success col-md-5">Enregistrer</button>
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