<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
   
	protected $clientes;
 
    public function __construct(Clientes $clientes) {
    
    $this->clientes = $clientes;

    }

    public function index() {

        $clientes = Clientes::all();
 
        return view('layout.welcome', ['clientes' => $clientes]);

    }

    public function clientes()
    {
                $clientes = [
                               ['nome' => 'José Silva', 'email' => 'joao123@gmail.com', 'cpf' => '454121547878', 'telefone' => 123568989, 'localidade' => 'são paulo'],
                               ['nome' => 'Marcelo Pereira', 'email' => 'pereira123@gmail.com', 'cpf' => '77541777878', 'telefone' => 45725454548, 'localidade' => 'salvador'],
                               ['nome' => 'ana livia', 'email' => 'ana123@gmail.com', 'cpf' => '8755121547878', 'telefone' => 787841121, 'localidade' => 'barretos']
                ];

                return $clientes;
    }
}
