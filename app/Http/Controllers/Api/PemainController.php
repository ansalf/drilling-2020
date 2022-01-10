<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{


    public function PemainIndex(){

         $pemain = Pemain::latest()->get();
        return response()->json($pemain);

    }// End Method 


    public function PemainStore(Request $request){

          $validateData = $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'posisi' => 'required'
        ]);

        Pemain::insert([
                'nomor_punggung' => $request->nomor_punggung,
                'fk_klub' => $request->fk_klub,
                'market_value' => $request->market_value,
                'created_at' => Carbon::now(),
            ]);
            return response('Pemain Inserted Successfully');

    } // End Method 


    public function PemainEdit($id){

        $pemain = Pemain::findOrFail($id);
        return response()->json($pemain);
    } // End Method 


    public function UserUpdate(Request $request, $id){

        Pemain::findOrFail($id)->update([
             'fk_klub' => $request->fk_klub,
             'nomor_punggung' => $request->nomor_punggung,
             'market_value' => $request->market_value,
             

        ]);
        return response('Pemain Updated Successfully');

    } // End Method 


    public function PemainDelete($id){

        Pemain::findOrFail($id)->delete();
        return response('Pemain Deleted Successfully');
        
    } // End Method 
  

}
 