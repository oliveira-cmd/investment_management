<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homePage(){
        $title = 'HomePage do sistema de gestão para grupos de investimentos';
        return view('welcome', [
            'title' => $title
        ]);
    }
    public function cadastro(){
        echo 'Tela de Cadastro';
    }
}
