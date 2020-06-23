@extends('layouts.app')

@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">ADV</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <form  method="post"  action="/insertoperation    " enctype="multipart/form-data">
             {{ csrf_field() }}
          <div class="card-body">
            
          <div class="row">
         
                  
              
                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">PD</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text" required  name="pd" id="userinput7">
                                            </div>
                                        </div>

                                       
                                        
                                     
                                      
                                    </div>

                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-2 label-control">VO  </label>
                                            <div class="col-md-10">
                                                <input class="form-control border-primary" required type="text"  name="vo" id="userinput7">
                                            </div>
                                        </div>

                                       
                                        
                                     
                                      
                                    </div>  
                                </div>


          </div>

          <div class="card-header">
            <h3 class="card-title">Client de facturation</h3>
          </div>

          <div class="row m-4">
         
                   
              
         <div class="col-md-12">
             
          
               
             <div class="form-group row mx-auto last">
                 <label class="col-md-2 label-control">Client</label>
                 <div class="col-md-10">
                 <select class="select2"  name="clent_id" data-placeholder="Select a State" style="width: 100%; height:100px !important;">   
                 @foreach ($client as $c)
                 <option value="{{ $c->id }}">{{ $c ->name }}</option>   
                @endforeach 
                  
                
                  </select>
                 </div>
             </div>

          

             
          
           
         </div>
     </div>


        


            
                                        

    

         
          <div class="card-header">
            <h3 class="card-title">Information du chargement</h3>
          </div>


          


          
          <div class="row m-4">
         
                   
              
         <div class="col-md-12">
             
          
               
             <div class="form-group row mx-auto last">
                 <label class="col-md-2 label-control">Destination </label>
                 <div class="col-md-10">
                 <select class="select2" name="dest1" data-placeholder="Select a State" style="width: 100%;">
                 @foreach ($destination as $d)
                 <option value="{{ $d->id }}">{{ $d ->destination }}</option>   
                @endforeach 
                  </select>
                 </div>
             </div>

             <div class="col-md-6">

             <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group date"   id="reservationdate2" data-target-input="nearest">
                        <input type="text"  name="dest1date" class="form-control datetimepicker-input" data-target="#reservationdate2"/>
                        <div class="input-group-append" data-target="#reservationdate2 " data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                

                </div>
            
                

        
           
         </div>
     </div>




 
     <div class="card-header">
            <h3 class="card-title">Information du déchargement</h3>
          </div>


          
          <div class="row m-4">
         
                   
              
         <div class="col-md-12">
             
          
               
             <div class="form-group row mx-auto last">
                 <label class="col-md-2 label-control">Destination </label>
                 <div class="col-md-10">
                 <select class="select2" name="dest2" data-placeholder="Select a State" style="width: 100%;">
                 @foreach ($destination as $d)
                 <option value="{{ $d->id }}">{{ $d ->destination }}</option>   
                @endforeach 
                  </select>
                 </div>
             </div>

             <div class="col-md-6">

<div class="form-group">
     <label>Date:</label>
     <div class="input-group date"   id="reservationdate" data-target-input="nearest">
                        <input type="text"  name="dest2date"  class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
   </div>

   

   </div>

   



</div>

          

             
          
           
         </div>
     </div>


          
          <div class="card-header">
            <h3 class="card-title">Information des moyens</h3>
          </div>


          
          <div class="row m-4">
         
                   
              
         <div class="col-md-12">
             
          
               
             <div class="form-group row mx-auto last">
                 <label class="col-md-2 label-control">Moyen</label>
                 <div class="col-md-10">
                 <select class="select2"  name="moyen_id" data-placeholder="Select a State" style="width: 100%;">
                 @foreach ($moyen as $d)
                 <option value="{{ $d->id }}">{{ $d ->Type }} {{ $d ->Matricule }} {{ $d ->Chauffeur }} {{ $d ->Prestataire }} </option>   
                @endforeach 
                  </select>
                 </div>
             </div>
             

          

             
          
           
         </div>
     </div>




          <div class="card-header">
            <h3 class="card-title">Achats</h3>
          </div>



        <div class="row m-4 ">
         
                   
              
                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">tarif</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"  name="tarif" id="userinput7">
                                            </div>
                                        </div>

                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-3 label-control">Immo</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"  name="tarif" id="userinput7">
                                            </div>
                                        </div>
                                       
                                        
                                     
                                      
                                    </div>

                                    <div class="col-md-6">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-2 label-control">amount  </label>
                                            <div class="col-md-10">
                                                <input class="form-control border-primary" type="number"  name="amount" id="userinput7">
                                            </div>
                                        </div>

                                       
                                        
                                     
                                      
                                    </div>  


                                    <div class="col-md-12">
                                        
                                     
                                          
                                        <div class="form-group row mx-auto last">
                                            <label class="col-md-2 label-control">Autre information  </label>
                                            <div class="col-md-10">
                             
                                                
                                                    <textarea class="form-control border-primary" type="text"  name="commentaire" rows="4" >
                                                   
                                                    </textarea>
                                            </div>
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
