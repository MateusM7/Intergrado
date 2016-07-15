<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Http\Requests;

class UserController extends Controller
{

      public function perfil(){
                 return view('adm.perfil_adm',array('user' => Auth::user()));


       }

      public function update_avatar(Request $request){

               //  upload do avatar 
            if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(400, 300)->save( public_path('/img/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

         }
          return view('adm.perfil_adm',array('user' => Auth::user()));
       }
}