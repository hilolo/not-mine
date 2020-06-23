<?php

namespace App\Http\Controllers;

use App\destination;
use Illuminate\Http\Request;



class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $files = destination::orderBy('created_at','DESC')->paginate(10);
        return view('CRUD.Destination.index',['Clients' => $files]);


    }


    public function add()
    {
        return view('CRUD.Destination.add');
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
      
        $ar= new destination();
        
         
        $ar->destination=$request->input('destination');
       $ar->adresse=$request->input('adresse');
       $ar->ville=$request->input('ville');
       $ar->codepostal=$request->input('codepostal');

     
    

       $ar->save();
       return redirect('/destinations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $share = destination::find($id);
        $share->delete();
   
         return redirect('/destinations');
        
    }
}
