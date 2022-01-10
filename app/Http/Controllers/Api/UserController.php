<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function UserIndex(){

         $user = User::latest()->get();
        return response()->json($user);

    }// End Method 


    public function UserStore(Request $request){

          $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required|unique:sections|min:8'
        ]);

            User::insert([
                'username' => $request->class_id,
                'level' => $request->level,
                'created_at' => Carbon::now(),
            ]);
            return response('User Inserted Successfully');

    } // End Method 


    public function UserEdit($id){

        $user = User::findOrFail($id);
        return response()->json($user);
    } // End Method 


    public function UserUpdate(Request $request, $id){

            User::findOrFail($id)->update([
             'username' => $request->username,
             'level' => $request->level,

        ]);
        return response('User Updated Successfully');

    } // End Method 


    public function UserDelete($id){

         User::findOrFail($id)->delete();
        return response('User Deleted Successfully');
        
    } // End Method 
  

}
 