<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posisi;

class PosisiController extends Controller
{
    public function PosisiIndex(){

        $posisi = Posisi::latest()->get();
        return response()->json($posisi);

    } // End Method 


    public function PosisiStore(Request $request){

        $validateData = $request->validate([
            'nama_posisi' => 'required'
        ]);

            Sclass::insert([
                'nama_posisi' => $request->nama_posisi,
            ]);
            return response('Posisi Pemain Inserted Successfully');

    } // End Method 

    public function Edit($id){

        $sclass = Sclass::findOrFail($id);
        return response()->json($sclass);

    } // End Method 


    public function Update(Request $request, $id){
       
        Sclass::findOrFail($id)->update([
           'class_name' => $request->class_name,

        ]);
        return response('Student Class Updated Successfully');

    } // End Method 


    public function Delete($id){
        
        Sclass::findOrFail($id)->delete();
        return response('Student Class Deleted Successfully');

    }// End Method 


} 

