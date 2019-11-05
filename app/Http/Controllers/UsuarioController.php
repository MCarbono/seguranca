<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use DB;


class UsuarioController extends Controller {
    
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        $login = $request->login;
        $senha = $request->senha;

        $teste = DB::table('usuario')->where([
            ['login', '=', $login],
            ['senha', '=', $senha]
        ])->select('login', 'senha')->get();

        if(count($teste) > 0){
           return view('logado');
        } else {
            return 'usuário ou senha invalidos';
        }
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
        $usuario = usuario::Create($request->all());
        $usuario->save();
        return redirect('/');
          
    }

    public function hackear(){
        return view('hackear');
    }
}

