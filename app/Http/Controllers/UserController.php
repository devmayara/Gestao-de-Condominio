<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfo($id)
    {
        $array = ['error' => ''];

        $user = User::find($id);
        if($user) {
            $users = User::where('id', $id)->get();

            foreach($users as $userKey => $userValue) {
                $users[$userKey]['name'] = $userValue['name'];
            }
            $array['users'] = $users;
        } else {
            $array['error'] = 'Usuário não existe!';
            return $array;
        }

        return $array;
    }

    public function update()
    {
        $array = ['error' => ''];



        return $array;
    }
}
