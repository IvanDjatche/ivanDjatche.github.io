
<div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
           
                      
                    
          <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
           
              <form class="row g-3 needs-validation" novalidate name="formulaire" method="POST" action="{{route('login')}}">
              @csrf 
               <div class="card mb-3 modal-content ">

                <div class="card-boody">
                  <div class="card-header">{{ __('Login') }}</div>

                  <div class="pt-4 pb-2 cad">

                 
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
                                          
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                              @endif
                      

                         <div class="col-12">
                      <label for="email" class="form-label">{{ __('Email Address') }}</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend" style="font-size:15px"><b>@</b></span>
                        <input id="email" type="email" style='height: 35px;' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>

                     <div class="col-12">
                      <label for="password" class="form-label">{{ __('PassWord') }}</label>
                      <div class="input-group has-validation">
                      <input id="password" type="password" style='height: 35px;' class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus  >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                     
                    </div>
                    </div></br>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="rememberMe"> {{ __('Remember Me') }}</label>
                      </div></br>
                    </div>
                    <div class="row mb-0">
                            <div class="col-md-12 offset-md ">
                                <button type="submit" class="btn btn-primary table">{{ __('Login') }}</button>&nbsp;

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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











