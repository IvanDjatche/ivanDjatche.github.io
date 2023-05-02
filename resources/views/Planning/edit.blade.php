<div class="modal fade " id="ModalEditPlanning" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
                  
                    
          <div class="container ">
           <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <form class="row g-3 needs-validation " novalidate name="formulaire" method="POST" action="{{route('Planning.update',$plannings)}}">

                {{ csrf_field() }}
                 @method('PUT')
               <div class="card mb-3 modal-content">

                <div class="card-boody">
                  <div class="card-header">

                  <div class="pt-4 pb-2 ">
                    <h5 class="card-title text-center pb-0 fs-4"><b style="font-size: 30px;font-family: sans-serif;">UpdatePlanning</b></h5>
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
                      <input type = "text" hidden  id ="planning_id" name ="planning_id">

                      <div class="col-12">
                      <label for="DateDebut" class="form-label">DateDebut</label>
                      <input type="date" name="DateDebut" class="form-control" id="DateDebut" value="">
                      <div class="invalid-feedback">Please, enter the date!</div>
                    </div>

                    <div class="col-12">
                      <label for="DateFin" class="form-label">DateFin</label>
                      <input type="date" name="DateFin" class="form-control" id="DateFin" value="">
                      <div class="invalid-feedback">Please, enter the date!</div>
                    </div>

                      <div class="col-sm-10 offset-9 cs ">
                         <button type="submit" name="submit" class="btn btn-success col-md-3">Modify</button>
                      
                                
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