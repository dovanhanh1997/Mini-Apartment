<?php


namespace App\Repositories\impl;


use App\Repositories\itf\UserRepositoryInterface;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::find($id);
    }

    public function update($request,$id)
    {
        return $this->findById($id)->update([
            'password' => Hash::make($request->newPassword)
        ]);
    }

    public function create($user,$request)
    {
        return $user->storeUser($request);
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
}
