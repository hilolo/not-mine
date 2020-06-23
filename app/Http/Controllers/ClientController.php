<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $files = Client::orderBy('created_at','DESC')->paginate(10);
        return view('CRUD.Client.index',['Clients' => $files]);
       
    }
    public function add()
    {
        
        return view('CRUD.Client.add');
    }


    public function insert(Request $request)
    {
        
        

            $ar= new Client();
        
         
 			$ar->name=$request->input('name');
            $ar->email=$request->input('email');
            $ar->adresse=$request->input('Adresse');
            $ar->Telephone=$request->input('tele');
            $ar->NTVA=$request->input('ntva');
            $ar->Site_web=$request->input('site');
            $ar->FAX=$request->input('fax');
          
         

            $ar->save();
            return redirect('/clients');
        
    }

    
    public function destroy($id)
    {
      $share = Client::find($id);
     $share->delete();

      return redirect('/clients');
     
    }

}
