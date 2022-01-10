<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LigaController extends Controller
{
    public function LigaIndex(){

        $liga = Liga::latest()->get();
       return response()->json($liga);

   }// End Method 


   public function LigaStore(Request $request){

         $validateData = $request->validate([
           'nama_liga' => 'required'
       ]);

       Liga::insert([
               'nama_liga' => $request->nama_liga,
               'created_at' => Carbon::now(),
           ]);
           return response('Liga Inserted Successfully');

   } // End Method 


   public function LigaEdit($id){

       $liga = Liga::findOrFail($id);
       return response()->json($liga);
   } // End Method 


   public function LigaUpdate(Request $request, $id){

    Liga::findOrFail($id)->update([
            'nama_liga' => $request->nama_liga,

       ]);
       return response('Liga Updated Successfully');

   } // End Method 


   public function LigaDelete($id){

    Liga::findOrFail($id)->delete();
       return response('Liga Deleted Successfully');
       
   } // End Method 
 

}

