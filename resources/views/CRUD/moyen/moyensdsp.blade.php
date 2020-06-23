
@extends('layouts.app')

@section('content')

<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2 p-3" >
            <h3 class="content-header-title">Information Des moyen disponible</h3>
         
          </div>
           <div class="col-xl-6 col-md-6 col-6">
        
      </div>

          
        </div>

        <section id="complex-header">
        <form  method="post"  action="/serachmoyend" enctype="multipart/form-data">
             {{ csrf_field() }}
        <div class="card-body">
        <div class="row">
         
                  
              
                                    <div class="col-md-5">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Destination </label>
                                            <div class="col-md-9">
                                              
             <div class="form-group row mx-auto last">
                
                 <div class="col-md-12  ">
                 <select class="select2" name="idm" data-placeholder="Select a State" style="width: 100%;">
                 @foreach ($aq as $d)
                 <option value="{{ $d->id }}">{{ $d ->destination }}</option>   
                @endforeach 
                  </select>
                 </div>
             </div>
                                            </div>
                                        </div>

                                       
                                        
                                     
                                      
                                    </div>



                                    <div class="col-md-1">
                                    <div class="float-right">
                        <button class="btn btn-sm btn-success  box-shadow-2 round btn-min-width pull-right white" type="submit">
                            <i class="ft-plus white"></i>Rechercher 
                        </button>
                    </div>
                                    </div>  
                                </div>
        </div>
        </form>
        </section>

        
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

      

          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>Type</th>
                <th>Matricule</th>
                <th >Chauffeur</th>
               
      
                <th>Prestataire</th>
                <th>Date de disponibilité   </th>
             
                
              </tr>
            </thead>
            <tbody>
            @foreach($Clients as $as)
            
      


              <tr>
              
                <td> {{$as->m->Type  }} </td>
                <td> {{$as->m->Matricule  }} </td>
                
                <td> {{$as->m->Chauffeur  }} </td>
                <td> {{$as->m->Prestataire  }} </td>
                <td> {{$as->dest2date }} </td>
                
         
               
               
              </tr>
              @endforeach

              
              
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
  
      
      </div>
      <!-- /.card -->

 
      <!-- /.card -->
    </div>

  </div>

  <!--  -->
</div>




</section>  
     


@endsection