<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function index(){
      //$fornecedores = ['fornecedor 1'];
        $fornecedores = [
                            0 =>[
                                    'nome'   => 'Fornecedor 1',
                                    'status' => 'N',
                                    'cnpj'  => '0',
                                    'ddd' => '11',//sp
                                    'telefone' => '0000-0000'
                                ],
                            1 =>[
                                    'nome'   => 'Fornecedor 2',
                                    'status' => 'S',
                                    'cnpj'  => null,
                                    'ddd' => '85',//fortaleza (ceara)
                                    'telefone' => '0000-0000'
                             
                            ],
                            2 =>[
                                'nome'   => 'Fornecedor 3',
                                'status' => 'S',
                                'cnpj'  => null,
                                'ddd' => '32',//juiz de fora mg
                                'telefone' => '0000-0000'
                         
                            ]
                                ];

        //Exemplo com operador ternario
        echo isset($fornecedores[1]['cnpj']) ? 'Existe CNPJ' : 'Não existe CNPJ';
                               
        return view('app.fornecedor.index', compact('fornecedores'));

        

        
    }
}
