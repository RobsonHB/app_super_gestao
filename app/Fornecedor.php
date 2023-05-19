<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    //Mapeamento do nome da tabela
    protected $table    = 'fornecedores';
    //Informando os campos que podem sofrer alterações dos dados
    protected $fillable = ['nome', 'site', 'uf', 'email'];


}
