
@extends('layouts.app')

@section('content')

<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2 p-3" >
            <h3 class="content-header-title">Destination</h3>
         
          </div>
           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/adddestination">
                            <i class="ft-plus white"></i>Nouveau destination
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
                <h3 class="card-title">Tableau des destination  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>destination</th>
                      <th>ville</th>
                      <th >adresse</th>
                     
            
                      <th>code postal</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      
    @foreach($Clients as $as)
   

                    <tr>
                    
                      <td> {{$as->destination  }} </td>
                      <td> {{$as->ville  }} </td>
                      
                      <td> {{$as->adresse  }} </td>
                      <td> {{$as->codepostal  }} </td>
                      
               
                      <td> <a class="btn btn-danger btn-sm"    onclick="return confirm('Are you sure you want to delete?')"  href="/deletedestionation/{{$as->id  }} "><i class="fas fa-trash"></i></a>
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