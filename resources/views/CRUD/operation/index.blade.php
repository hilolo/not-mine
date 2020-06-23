
@extends('layouts.app')

@section('content')

<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2 p-3" >
            <h3 class="content-header-title">Information Des Opération</h3>
         
          </div>
           <div class="col-xl-6 col-md-6 col-6">
         <div class="float-right">
                        <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="/addoperations">
                            <i class="ft-plus white"></i>Nouveau Opération
                        </a>
                    </div>
      </div>

          
        </div>

        <section id="complex-header">
        <form  method="post"  action="/searchope" enctype="multipart/form-data">
             {{ csrf_field() }}
        <div class="card-body">
        <div class="row">
         
                  
              
                                    <div class="col-md-5">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Date debut </label>
                                            <div class="col-md-9">
                                            <div class="input-group date"   id="reservationdate" data-target-input="nearest">
                        <input type="text"  required name="dest1date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                                            </div>
                                        </div>

                                       
                                        
                                     
                                      
                                    </div>

                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-2 label-control">Date de fin     </label>
                                            <div class="col-md-10">
                                            <div class="input-group date"   id="reservationdate2" data-target-input="nearest">
                        <input type="text" required  name="dest1date" class="form-control datetimepicker-input" data-target="#reservationdate2"/>
                        <div class="input-group-append" data-target="#reservationdate2 " data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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

        <section id="complex-header">
    <div class="row">
        <div class="col-12">
        <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>pd/vo</th>
                      <th>Client</th>
                      <th>Information du chargement </th>
                      <th>Information du déchargement </th>
                      <th>Information des moyens</th>
                      <th>Total</th>
                      <th>Etat</th>
                    
                      <th>action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Clients as $as)
       

                    <tr>
                    
                      <td>   {{$as->pd }} /  {{$as->vo }}  </td>
                      <td> {{$as->c->name }} </td>
                      <td> {{$as->de1->destination }} |  {{$as->dest1date }} </td>
                      <td> {{$as->de2->destination }} |  {{$as->dest2date }} </td>
                      <td>  {{$as->m->Type }} | {{$as->m->Matricule }} |  {{$as->m->Chauffeur }}  | {{$as->m->Prestataire }}  </td>
                      <td> {{$as->amount }}  </td>
                      
                      @if($as->etat=='0')
                      <td>  <img src=" https://i.pinimg.com/originals/58/4b/60/584b607f5c2ff075429dc0e7b8d142ef.gif  " alt="this slowpoke moves"  width="50" alt="404 image"/>   </td>
                      @else
                      <td>  <img src="https://w0.pngwave.com/png/620/17/computer-icons-check-mark-random-buttons-png-clip-art.png" alt="this slowpoke moves"  width="45" alt="404 image"/>   </td>
                     
                      @endif
                      <td> 
                        <a class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to validate this operation?')" href="/validateope/{{$as->id }}"><i class="fas fa-check "></i></a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this client?')" href="/deleteoperation/{{$as->id }}"><i class="fas fa-trash"></i></a>

                      </td>
                     
                    </tr>
                       

                    @endforeach 
                    
                    
                    
                    
                  </tbody>
                </table>
              </div>


          
                </div>
            </div>
        </div>
    </div>
</section>

     


@endsection