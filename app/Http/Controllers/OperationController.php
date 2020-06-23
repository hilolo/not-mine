<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;
use App\moyen;
use App\destination;
use App\Client;
use DB;

class OperationController extends Controller
{
    public function index($type)
    {   

        //dd($type);
        $files = Operation::all();
        if($type== "tous"){
        $files = Operation::all();}
   
    if ($type=="active")
          {$files = Operation::all()->where("etat","0");  }

        if($type=="terminé") { $files = Operation::all()->where("etat","1");}
        return view('CRUD.operation.index',['Clients' => $files]);
     

    }
    
    public function searchope(Request $request)
    {
       
        $files = Operation::all()->where('dest1date', '<', $request->input('dest1date') )->where('dest2date', '>',$request->input('dest2date'));
        return view('CRUD.operation.index',['Clients' => $files]);
    }

    
    public function add()
    {
        $moyen = moyen::all();
        $destination = destination::all();
        $client = Client::all();
        return view('CRUD.operation.add',compact('moyen','destination','client'));
    }

    public function valideaq($id)
    {
       $ar = Operation::find($id);
        $ar->etat="1";
       $ar->save();
       return redirect('/operations/tous');
    }

    public function insert(Request $request)
    {
      
      // dd($request->all());    
        $ar= new Operation();
        
         
       $ar->pd=$request->input('pd');
       $ar->vo=$request->input('vo');
       $ar->clent_id=$request->input('clent_id');
       $ar->dest1=$request->input('dest1');
       $ar->dest1date=$request->input('dest1date');
       $ar->dest2=$request->input('dest2');
       $ar->dest2date=$request->input('dest2date');
       $ar->moyen_id=$request->input('moyen_id');
       $ar->tarif=$request->input('tarif');
       $ar->amount=$request->input('amount');
       $ar->commentaire=$request->input('commentaire');
       $ar->etat="0";



       $ar->save();
       return redirect('/operations/tous');
    }

    public function destroy( $id)
    {
        $share = Operation::find($id);
        $share->delete();
   
         return redirect('/operations/tous');
    }



}
