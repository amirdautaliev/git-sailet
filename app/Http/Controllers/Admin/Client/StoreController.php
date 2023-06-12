<?php

namespace App\Http\Controllers\Admin\Client;



use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;



class StoreController extends Controller
{
      public function __invoke(Request $request)
      {
         $user=$request->validate(
            [
               'email'=>'required|unique:users',
               'password'=>'required',
            ]
            );
 
      $Userid=User::create($user);
     
    Client::create([
               'NameCompany' =>$request->NameCompany,
               'last_name'=>$request->last_name,
               'first_name'=>$request->first_name,
               'middle_name'=>$request->middle_name,
               'link_Google_table'=>$request->link_Google_table,
               'link_Google_disk'=>$request->link_Google_disk,
               'user_id'=>$Userid->id
         ]);
     
      return redirect()->route('admin.client.index');
       


      }

 
  
}
