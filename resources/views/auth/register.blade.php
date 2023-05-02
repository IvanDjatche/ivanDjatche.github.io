
<div class="modal fade " id="registerUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
                  
                    
          <div class="container ">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation " novalidate name="formulaire" method="POST" action="{{route('register')}}">
              @csrf
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">{{ __('Register') }}</div>

                  <div class="pt-4 pb-2 ">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;"></b></h5>

                    <div class="col-12">
                      <label for="Nom" class="form-label">{{ __('Nom') }}</label>
                      <input type="text" name="Nom" class="form-control @error('Nom') is-invalid @enderror" value="{{ old('Nom') }}" required autocomplete="Nom" autofocus id="Nom">
                        @error('Nom')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="Prenom" class="form-label">{{ __('Prenom') }}</label>
                      <input type="text" name="Prenom"  class="form-control @error('Prenom') is-invalid @enderror" value="{{ old('Prenom') }}" required autocomplete="Prenom" autofocus id="Prenom">
                        @error('Prenom')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter your proname!</div>
                    </div>

                    <div class="col-12">
                      <label for="Telephone" class="form-label">{{ __('Telephone') }}</label>
                      <input type="number" name="Telephone" class="form-control @error('Telephone') is-invalid @enderror" value="{{ old('Telephone') }}" required autocomplete="Telephone" autofocus id="Telephone">
                      @error('Telephone')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter your phone number!</div>
                    </div>
                    <div class="col-12">
                      <label for="Adresse" class="form-label">{{ __('Adresse') }}</label>
                      <input type="text" name="Adresse" class="form-control @error('Adresse') is-invalid @enderror" value="{{ old('Adresse') }}" required autocomplete="Adresse" autofocus id="Adresse">
                      @error('Adresse')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter your adresse!</div>
                    </div>

                    <div class="col-12">
                      <label for="Ville" class="form-label">{{ __('Ville') }}</label>
                      <input type="text" name="Ville" class="form-control @error('Ville') is-invalid @enderror" value="{{ old('Ville') }}" required autocomplete="Ville" autofocus id="Ville">
                      @error('Adresse')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter your city!</div>
                    </div>

                    <div class="col-12">
                      <label for="Sexe" class="form-label">{{ __('Sexe') }}</label>
                    <select name="Sexe" class="form-control" required  id="Sexe" >
                                                             <option value="M">Masculin</option>
                                                             <option value="F">Feminin</option></select>
                        @error('Sexe')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-12">
                      <label for="DateNaiss" class="form-label">{{ __('DateNaiss') }}</label>
                      <input type="date" name="DateNaiss" class="form-control @error('DateNaiss') is-invalid @enderror" value="{{ old('DateNaiss') }}" required autocomplete="DateNaiss" autofocus id="DateNaiss">
                      @error('DateNaiss')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror              
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">{{ __('eMail') }}</label>
                      <input type="email" name="email"  class="form-control @error('Email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus id="email">
                      @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter the email!</div>
                    </div>

                    <div class="col-12">
                      <label for="Role" class="form-label">{{ __('Role') }}</label>
                        <select name="Role" class="form-control @error('Role') is-invalid @enderror" value="{{ old('Role') }}" required autocomplete="Role" autofocus id="Role" >
                       
                                                                            <option value="clients">Client</option>
                                                                            <option value="laveurs">Laveur</option>
                                                                           

                        </select>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">{{ __('Default PassWord') }}</label>
                      <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password" autofocus id="password">
                      @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <div class="invalid-feedback">Please, enter the default password!</div>
                    </div>

                      <div class="col-sm-10 offset-2 cs ">
                         <button type="reset" name="annuler" class="btn btn-danger  col-md-5">{{ __('Annuler') }}</button>
                         <button type="submit" name="submit" class="btn btn-success col-md-5">{{ __('Register') }}</button>
                      
                                
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













