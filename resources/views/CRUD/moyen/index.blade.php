
@extends('layouts.app')

@section('content')

<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2 p-3" >
            <h3 class="content-header-title">Information Des Moyens</h3>
         
          </div>
           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/addmoyen">
                            <i class="ft-plus white"></i>Nouveau Unité
                        </a>
                    </div>
      </div>

          
        </div>

                    <section id="" class="row">
 

       <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tableau des Moyens  </h3>
              </div>

            
              <!-- /.card-header -->
              <div class="card-body">

              <ul class="nav nav-pills m-2">
                  <li class="nav-item"><a class="nav-link active" href="/moyens">TOUS</a></li>
                  <li class="nav-item"><a class="nav-link" href="/moyens/CAMION14T" >CAMION 14T</a></li>
                  <li class="nav-item"><a class="nav-link" href="/moyens/CAMION3,5T">CAMION 3,5T</a></li>
                  <li class="nav-item"><a class="nav-link" href="/moyens/PLATEAU" >PLATEAU</a></li>
                  <li class="nav-item"><a class="nav-link" href="/moyens/TAXI">TAXI</a></li>
                  <li class="nav-item"><a class="nav-link" href="/moyens/AUTRE">AUTRE</a></li>
                </ul>


                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Type</th>
                      <th>Matricule</th>
                      <th >Chauffeur</th>
                     
            
                      <th>Prestataire</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
    @foreach($Clients as $as)
   

                    <tr>
                    
                      <td> {{$as->Type  }} </td>
                      <td> {{$as->Matricule  }} </td>
                      
                      <td> {{$as->Chauffeur  }} </td>
                      <td> {{$as->Prestataire  }} </td>
                      
               
                      <td>
                      <a class="btn btn-info btn-sm" href="/moyenedit/{{$as->id  }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                           <a class="btn btn-danger btn-sm"    onclick="return confirm('Are you sure you want to delete?')"  href="/deletemoyens/{{$as->id  }} "><i class="fas fa-trash"></i></a>
                 
                      </td>
                     
                    </tr>
                    @endforeach

                    
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              {{ $Clients->links() }}
              </div>
            
            </div>
            <!-- /.card -->

       
            <!-- /.card -->
          </div>
    
        </div>

        <!--  -->
      </div>


     
     
</section>
    

@endsection