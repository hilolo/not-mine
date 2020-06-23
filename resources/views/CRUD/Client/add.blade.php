@extends('layouts.app')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Insert Client</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form  method="post"  action="/insertClient" enctype="multipart/form-data">
             {{ csrf_field() }}
          <div class="card-body">
            
          <div class="row">
         
          <div class="col-md-12">
                                      

                                      <div class="form-group row mx-auto">
                                          <label class="col-md-2 label-control" >Name</label>
                                          <div class="col-md-10 ">
                                              <input class="form-control border-primary" name="name"   required>
                                          </div>
                                      </div>

                                      </div>             
              
                                    <div class="col-md-6">
                                      

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">email</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="email"  userinput6">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto">
                                            <label class="col-md-3 label-control" for="userinput6">Adresse</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="Adresse"  userinput6">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Téléphone</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" name="tele" type="tel" placeholder=" " id="userinput7">
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">N° TVA</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="tel" placeholder=" Number" name="ntva" id="userinput7">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Site web</label>
                                            <div class="col-md-9">
                                               <input class="form-control border-primary" type="url" placeholder="http://" name="site" id="userinput6">
                                            </div>
                                        </div>
                                         <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">FAX</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="tel" placeholder="Contact " name="fax" id="userinput7">
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
