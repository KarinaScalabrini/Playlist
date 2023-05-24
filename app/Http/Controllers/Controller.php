<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends \Illuminate\Routing\Controller
{
    public function index(Request $request)
    {
        $albuns = [
            [
                "nomeAlbum" => "Rei do Gado",
                "ano" => "1961",
                "musicas" => [
                    ["faixa" => "Minas Gerais", "duracao" => "3.47"]
                ]
            ],
            [
                "nomeAlbum" => "Linha de Frente",
                "ano" => "1964",
                "musicas" => [
                    ["faixa" => "O Mineiro e o Italiano", "duracao" => "3.21"],
                    ["faixa" => "Minha Prece", "duracao" => "2.42"]
                ]
            ]
        ];

        return view('welcome')->with('albuns', $albuns);
    }
}