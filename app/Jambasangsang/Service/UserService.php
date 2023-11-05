<?php
namespace App\Jambasangsang\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService{

    public function getUserData()
    {

    }
    public function storeUserData($request)
    {
      $user = User::updateOrcreate(['id'=>$request->edit_id],
     [
        'title'=>$request->title,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'gender' => $request->gender,
                'mobile' => $request->mobile,
                'dob'=>$request->dob,
                'religion' => $request->religion,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'password' => Hash::make($request->role_id),
                'status' =>$request->status == "on" ? 1 : 0,
     ]
    );
    $user->assignRole($request->role_id);
    return $this;
    }
    public function editUserData($user)
    {
         
    }
}