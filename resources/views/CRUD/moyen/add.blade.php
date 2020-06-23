@extends('layouts.app')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Insert moyen</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form  method="post"  action="/insetmoyen" enctype="multipart/form-data">
             {{ csrf_field() }}
          <div class="card-body">
            
          <div class="row">
         
                   
              
                                    <div class="col-md-6">
                                      

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">Type</label>
                                            <div class="col-md-9">
                                                
                                            <select class="form-control border-primary"  name="Type" >
                                                <option value="CAMION14T">CAMION 14T</option>
                                                <option value="CAMION3,5T">CAMION 3,5T</option>
                                                <option value="PLATEAU">PLATEAU </option>
                                                <option value="TAXI">TAXI </option>
                                                <option value="AUTRES">AUTRES </option>
                                               
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">Matricule</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" placeholder="Numero matricule " name="Matricule"  userinput6">
                                            </div>
                                        </div>

                                     
                                     
                                    </div>
                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Chauffeur</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"  name="Chauffeur" id="userinput7">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Prestataire</label>
                                            <div class="col-md-9">
                                               <input class="form-control border-primary" type="text" name="Prestataire"  list="cars"  >
                                               <datalist id="cars">
                                            <option>ATM TRANS  </option>
                                            <option>BIMBO TRANS</option>
                                            <option>CN6</option>
                                            <option>GLOBAL TRANS</option>
                                            <option>JOLIE TRANS</option>
                                            <option>SAYO TRANS</option>
                                            </datalist>
                                            </div>
                                        </div>

                                        
                                     
                                      
                                    </div>
                                </div>


          </div>
          <!-- /.card-body -->
          <div class="card-footer">
             <div class="form-actions text-right">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Sauvegarder
                                </button>
                            </div>  
          </div>
          </form>
      

        </div>
        <!-- /.card -->



  

     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    

@endsection
