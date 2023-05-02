
<div class="modal fade " id="exampleModalCenterUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
                  
                    
          <div class="container ">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation "  name="formulaire" method="POST" action="{{route('Utilisateur.store')}}">
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">

                  <div class="pt-4 pb-2 ">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">AddUser</b></h5>

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

                 @csrf
                    <div class="col-12">
                      <label for="Nom" class="form-label">Nom</label>
                      <input type="text" name="Nom" class="form-control" id="Nom" value="">
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="Prenom" class="form-label">Prenom</label>
                      <input type="text" name="Prenom" class="form-control" id="Prenom" value="">
                      <div class="invalid-feedback">Please, enter your proname!</div>
                    </div>

                    <div class="col-12">
                      <label for="Telephone" class="form-label">Telephone</label>
                      <input type="number" name="Telephone" class="form-control" id="Telephone"  value="">
                      <div class="invalid-feedback">Please, enter your phone number!</div>
                    </div>

                    <div class="col-12">
                      <label for="Adresse" class="form-label">Adresse</label>
                      <input type="text" name="Adresse" class="form-control" id="Adresse"  value="">
                      <div class="invalid-feedback">Please, enter your adresse!</div>
                    </div>

                    <div class="col-12">
                      <label for="Ville" class="form-label">Ville</label>
                      <input type="text" name="Ville" class="form-control" id="Ville"  value="">
                      <div class="invalid-feedback">Please, enter your city!</div>
                    </div>

                    <div class="col-12">
                      <label for="Sexe" class="form-label">Sexe</label>
                    <select name="Sexe" class="form-control" id="Sexe" ><option value="Masculin">Masculin</option>
                                                             <option value="Feminin">Feminin</option></select>
                    </div>

                    <div class="col-12">
                      <label for="DateNaiss" class="form-label">DateNaiss</label>
                      <input type="date" name="DateNaiss" class="form-control" id="DateNaiss"  value="">
                      
                    </div>

                    <div class="col-12">
                      <label for="eMail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" value="">
                      <div class="invalid-feedback">Please, enter the email!</div>
                    </div>


                    <div class="col-12">
                      <label for="Role" class="form-label">Role</label>
                        <select name="Role" class="form-control" id="Role" ><option value="clients">Client</option>
                                                                            <option value="laveurs">Laveur</option>
                                                                           

                        </select>
                    </div>

                    <div class="col-12">
                      <label for="Passe" class="form-label">Mot de passe par défaut</label>
                      <input type="password" name="password" class="form-control" id="password" value="">
                      <div class="invalid-feedback">Please, enter the default password!</div>
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


