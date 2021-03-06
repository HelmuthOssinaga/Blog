<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Postagens;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*select('users.name as nome', 'postagens.nomePost', 'postagens.descricao', 'postagens.created_at', 'postagens.id')
        ->join('users','users.id' , '=', 'postagens.usuario' )
        ->orderBy('postagens.created_at','desc')
        ->get();*/

        $postagens = Postagens::all();
        return view('index',compact('postagens'));
    }

    public function mensagem(){
        return view('enviarMensagem');
    }

}
