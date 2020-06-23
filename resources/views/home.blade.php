
@extends('layouts.app')

@section('content')

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-user-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Les Clients</span>
              <span class="info-box-number">  {{$a }} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fas fa-map-marker "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Les Destinations</span>
              <span class="info-box-number">  {{$b }} </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fas fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Les Moyens</span>
              <span class="info-box-number">{{$c }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fas fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Les opérations</span>
              <span class="info-box-number">{{$d}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="container">
      <div class="row">
      <div class="col-md-6">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dernière opérations</h3>

            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>

       
                  <tr>
                    <th>pd/vo</th>
                    <th>Client</th>
                    <th>chargement</th>
                    <th>déchargement</th>
                  </tr>
                  </thead>
                  <tbody>


                  
                  @foreach($Clients as $as)
       

       <tr>
       
         <td>   {{$as->pd }} /  {{$as->vo }}  </td>
         <td> {{$as->c->name }} </td>
         <td> {{$as->de1->destination }} |  {{$as->dest1date }} </td>
         <td> {{$as->de2->destination }} |  {{$as->dest2date }} </td>
        
       </tr>
          

       @endforeach


                 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="/operations/tous" class="btn btn-sm btn-info btn-flat pull-left">Passer une nouvelle opération</a>
              <a href="/addoperations" class="btn btn-sm btn-default btn-flat pull-right">Afficher toutes les opérations</a>
            </div>
            <!-- /.box-footer -->
          </div>
          </div>


          <div class="col-md-6">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dernière opérations</h3>

            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
         
            <br><br><br>
         <!--Currency Converter widget by FreeCurrencyRates.com -->

<div id='gcw_mainFj3cQlHAW' class='gcw_mainFj3cQlHAW'></div>
<a id='gcw_siteFj3cQlHAW' href='https://freecurrencyrates.com/fr/'>FreeCurrencyRates.com</a>
<script>function reloadFj3cQlHAW(){ var sc = document.getElementById('scFj3cQlHAW');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFj3cQlHAW';sc.src = 'https://freecurrencyrates.com/fr/widget-vertical?iso=USD-EUR-GBP-JPY-CNY-XUL&df=2&p=Fj3cQlHAW&v=fits&source=fcr&width=400&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Convertisseur%20de%20devises&tzo=-120';var div = document.getElementById('gcw_mainFj3cQlHAW');div.parentNode.insertBefore(sc, div);} reloadFj3cQlHAW(); </script>
<!-- put custom styles here: .gcw_mainFj3cQlHAW{}, .gcw_headerFj3cQlHAW{}, .gcw_ratesFj3cQlHAW{}, .gcw_sourceFj3cQlHAW{} -->
<!--End of Currency Converter widget by FreeCurrencyRates.com -->
            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
          </div>
          </div>
          </div>
    @endsection