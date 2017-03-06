<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	//serve para definir o nome da tabela qual pretende buscar no banco
	protected $table = 'produtos';

	public $timestamps = false;

	protected $fillable = array('nome', 'descricao', 'quantidade', 'valor', 'tamanho', 'categoria_id');

	public function categoria(){
		return $this->belongsTo('App\Categoria');
	}
}
