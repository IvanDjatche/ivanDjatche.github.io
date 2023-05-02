<div class="modal fade" id="ModalAddLavage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
           
                    
          <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation" novalidate name="formulaire" method="POST"  action="{{route('Lavage.store')}}">
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">

              @csrf
              

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">AddLavage</b></h5>
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
                      <label for="DateLavage" class="form-label">DateLavage</label>
                      <input type="date" name="DateLavage" class="form-control" id="DateLavage" required="">
                      <div class="invalid-feedback">Please, enter the date!</div>
                    </div>

                      <div class="col-12">
                      <label for="Type" class="form-label">Type</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!-- gestion des espaces -->
                      Complet <input type="radio" name="Type" value="complet" id="Type" required="" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      Demi-lavage <input type="radio" name="Type" value="Demi_lavage" id="Type" required="" checked>
                      
                    </div>

                    <div class="col-12">
                      <label for="Montant" class="form-label">Montant</label>
                      <input type="number" name="Montant" class="form-control" id="" required="">
                      <div class="invalid-feedback">Please, enter prize!</div>
                    </div>

                    <div class="col-12">
                      <label for="Duree" class="form-label">Duree</label>
                      <input type="number" name="Duree" class="form-control" id="Duree" required="">
                    
                    </div>

                      <div class="col-12">
                      <label for="NomLaveur" class="form-label">NomLaveur</label>
                      <input type="text" name="NomLaveur" class="form-control" id="NomLaveur" required="">
                    
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
      