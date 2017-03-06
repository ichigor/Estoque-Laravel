<?php namespace App\Http\Controllers;

use Request;
use DB;
use App\Produto;
use App\Http\Requests\ProdutoRequest;
use Auth;
use App\Categoria;

/*
use App\Http\Controllers\EquipeController;

use App\equipe;
use App\Http\Requests\EquipeRequest;
*/
class ProdutoController extends Controller{
  
   public function __construct()
    {
        $this->middleware('autorizador');
    }


  public function lista(){
    $produtos = Produto::all();
    return view('listagem')->with('produtos', $produtos);
  }

  public function mostra($id){
  	$produto = Produto::find($id);
  	return view('detalhes')->with('p', $produto);
  }

  public function remove($id){
  	$produto = Produto::find($id);
  	$produto->delete();
  	return redirect()->action('ProdutoController@lista');

  }

  public function novo(){
	
	return view('formulario')->with('categorias', Categoria::all());

  }
  public function adiciona(ProdutoRequest $request){
  	$params = $request->all();
  	$produto = new Produto($params);
  	$produto->save();

  	/*Mesma funcao em uma linha
  	Produto::create($request->all());

	*/
  	return redirect('/produtos')->withInput();
  }
}
