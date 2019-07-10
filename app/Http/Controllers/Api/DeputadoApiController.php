<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Deputado; // chama o arquivo Deputado para utilizar suas funções


class DeputadoApiController extends Controller
{
    public function __construct(Deputado $deputado,Request $request)
    {
        $this->deputado = $deputado;
        $this->request = $request;
    }
    public function index(){                //metodo get
        
        $data = $this->deputado->all('nome');  
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request,$this->deputado->rules()); //metodo para validar chamando a função rules que se encontra na model Deputado
        $dataForm = $request->all();
        
        $data = $this->deputado->create($dataForm);
        
        if (!$data){
            return response()->json(['error' => 'Falha ao inserir dados'],500);  //condição para tratamento de erro
        }else{
            return response()->json($data,201);  //passo a variavel $data dentro do metodo json e coloco 201 (status)
        }
    }
    
    public function show($id)
    {
        if (!$data = $this->deputado->find($id)){
            return response()->json(['error'=>'Nada encontrado!'],404);  //condição para tratamento de erro caso busque algo que nao exista
        }else{
            return response()->json($data);
        }
    }


    
    public function update(Request $request, $id)
    {
        if (!$data = $this->deputado->find($id))
            return response()->json(['error'=>'Nada encontrado!'],404); // tratamento para erro caso não encontre o id

        $this->validate($request,$this->deputado->rules());      // chama a função rules
        
        $dataForm = $request->all();
                                                // OBS: nao esquecer de passsar o ID na Url para realizar o update
        $data->update($dataForm);
        return response()->json($data);
    }


    public function destroy($id)
    {
        if (!$data = $this->deputado->find($id)){                       // tratamento para erro
            return response()->json(['error'=>'Nada encontrado!'],404);
        
        }else{
                $data->delete();
                return response()->json(['success'=>'Deletado com sucesso!']); // confirma exclusão no banco de dados
        }
        
    }

}

