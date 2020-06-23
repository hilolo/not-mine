@extends('layouts.app')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Insert destination</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form  method="post"  action="/insertdestination" enctype="multipart/form-data">
             {{ csrf_field() }}
          <div class="card-body">
            
          <div class="row">
         
                   
              
                                    <div class="col-md-6">
                                      

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">destination</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="destination"  userinput6" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">adresse</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="adresse"  userinput6">
                                            </div>
                                        </div>

                                     
                                     
                                    </div>
                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">ville</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="tel" placeholder=" Number" name="ville" id="userinput7">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">code postal</label>
                                            <div class="col-md-9">
                                               <input class="form-control border-primary" type="text" placeholder="Ex:9000" name="codepostal" id="userinput6">
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
