<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Klub;


class KlubController extends Controller
{


    public function KlubIndex(){

         $klub = Klub::latest()->get();
        return response()->json($klub);

    }// End Method 


    public function KlubStore(Request $request){

          $validateData = $request->validate([
            'nama_klub' => 'required',
            'fk_liga' => 'required',
        ]);

        Pemain::insert([
                'logo' => $request->logo,
                'nama_klub' => $request->nama_klub,
                'fk_liga' => $request->fk_liga,
                'created_at' => Carbon::now(),
            ]);
            return response('Klub Inserted Successfully');

    } // End Method 


    public function KlubEdit($id){

        $klub = Klub::findOrFail($id);
        return response()->json($klub);
    } // End Method 


    public function KlubUpdate(Request $request, $id){

        Klub::findOrFail($id)->update([
            'logo' => $request->logo,
            'nama_klub' => $request->nama_klub,
            'fk_liga' => $request->fk_liga,
            

        ]);
        return response('Klub Updated Successfully');

    } // End Method 


    public function KlubDelete($id){

        Klub::findOrFail($id)->delete();
        return response('Klub Deleted Successfully');
        
    } // End Method 
  

}