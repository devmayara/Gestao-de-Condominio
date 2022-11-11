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

    public function update($id, Request $request)
    {
        $array = ['error' => ''];

        $name = $request->input('name');
        $email = $request->input('email');
        $cpf = $request->input('cpf');
        $password = $request->input('password');

        $hash = password_hash($password, PASSWORD_DEFAULT);

        if($name && $email && $cpf && $password) {
            $dados = User::find($id);
            if($dados) {
                $dados->name = $name;
                $dados->email = $email;
                $dados->cpf = $cpf;
                $dados->password = $hash;
                $dados->save();

                $array['user'] = [
                    'id' => $id,
                    'name' => $name,
                    'email' => $email,
                    'cpf' => $cpf,
                    'password' => $password,
                ];
            } else {
                $array['error'] = 'Usuário não existe!';
                return $array;
            }
        } else {
            $array['error'] = 'Usuário não existe!';
            return $array;
        }

        return $array;
    }
}
