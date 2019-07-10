<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    protected $fillable =[   //variavel do tipo array que armazena esses valores
        'id_deputado',
        'nome',
        'partido',
        'MES1',
        'MES2',
        'MES3',
        'MES4',
        'MES5',
        'MES6',
        'MES7',
        'MES8',
        'MES9',
        'MES10',
        'MES11',
        'MES12',
    ];

    public function rules(){    //funçao regra para retorna uma array
        return[
        'id_deputado' => 'required|unique:deputados',  // requerido ,unico e passo a tabela deputados
        'nome' => 'required',
        'partido' => 'required',
        'MES1',
        'MES2',
        'MES3',
        'MES4',
        'MES5',
        'MES6',
        'MES7',
        'MES8',
        'MES9',
        'MES10',
        'MES11',
        'MES12',

        ];
    }
}
