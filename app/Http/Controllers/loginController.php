<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'ambiente' =>['required','ambiente'],
            'usuario' =>['required','usuario'],
            'password' =>['required']
        ],[
            'ambiente.required' => 'O campo ambiente é obrigatório',
            'ambiente.ambiente' => 'O ambiente não é válido',

            'usuario.required' => ' O campo usuario é obrigatório',
            'usuario.usuario' => 'O usuario nao é válido',

            'senha.required' => 'O campo senha é obrigatório',
            'senha.senha' => 'O campo senha nao é válido'
        ]
    );

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }else{
            return redirect()->back()->with('erro','ambiente,usuario ou senha inválido');
        }
    }
}
