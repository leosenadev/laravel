<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class FornecedoresController extends Controller
{
    public function index(){


        /* Condicao if */

        $listFornecedores = [
            'Fornecedor 1',
            'Fornecedor 2',
            'Fornecedor 3',
            'Fornecedor 4',
            'Fornecedor 5',
            'Fornecedor 6',
            'Fornecedor 6',
            'Fornecedor 6',
            'Fornecedor 6',
            'Fornecedor 6',
            'Fornecedor 6',
        ];
        

        $fornecedores = [
            0 =>[
                    'nome'=> 'Fornecedor 1',
                    'status'=>'N',
                    'cnpj'=>'00.000.00/000-00',
                    'ddd'=>'71', //Salvador
                    'telefone'=>'1111-1111'
        
                ],
            1 =>[
                    'nome'=>'Fornecedor 2',
                    'status'=>'S',
                    'cnpj'=>null,
                    'ddd' =>'11', //Sao paulo
                    'telefone'=>'2222-2222'
            ],
            2=>[
                'nome'=>'Fornecedor 3',
                'status'=> 'S',
                'cnpj'=>null,
                'ddd'=>'85', // fortaleza
                'telefone'=>'3333-3333'
                
            ]

        ];

        

        return view('app.fornecedor.index',compact('fornecedores','listFornecedores'));
    }
}
