<?php

namespace App\Http\Controllers;

use App\moyen;
use Illuminate\Http\Request;
use App\destination;
use App\Operation;


class MoyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $files = moyen::orderBy('created_at','DESC')->paginate(10);
        return view('CRUD.moyen.index',['Clients' => $files]);

    }

    public function index2()
    {
        
        $aq = destination::all();
        $files = Operation::find(1)->where('moyen_id','1')->distinct('moyen_id')->get();
        return view('CRUD.moyen.moyensdsp',['Clients' => $files,'aq' => $aq]);

    }

    public function serachm(Request $request)
    {
        
        $aq = destination::all();
        $files = Operation::where('dest2',$request->input('idm'))->distinct('moyen_id')->get();
        return view('CRUD.moyen.moyensdsp',['Clients' => $files,'aq' => $aq]);
    }
    


    

    public function indexfilter($type)
    {
        
        $files = moyen::where("Type",$type)->orderBy('created_at','DESC')->paginate(10);
        return view('CRUD.moyen.index',['Clients' => $files]);

    }

    
    
    public function editaq($id)
    {
        
        $files = moyen::find($id);
       // dd($files); 
        return view('CRUD.moyen.edit', compact('files'));

    }

        
    public function edit(Request $request,$id)
    {
        
        $ar = moyen::find($id);
       
        $ar->Type=$request->input('Type');
       $ar->Matricule=$request->input('Matricule');
       $ar->Chauffeur=$request->input('Chauffeur');
       $ar->Prestataire=$request->input('Prestataire');

     
    

       $ar->save();
       return redirect('/moyens');
    }




    public function add()
    {
        return view('CRUD.moyen.add');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $ar= new moyen();
        
         
        $ar->Type=$request->input('Type');
       $ar->Matricule=$request->input('Matricule');
       $ar->Chauffeur=$request->input('Chauffeur');
       $ar->Prestataire=$request->input('Prestataire');

     
    

       $ar->save();
       return redirect('/moyens');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\moyen  $moyen
     * @return \Illuminate\Http\Response
     */
    public function show(moyen $moyen)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\moyen  $moyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moyen $moyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\moyen  $moyen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $share = moyen::find($id);
        $share->delete();
   
         return redirect('/moyens');
    }
}
