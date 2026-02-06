<?php
 
namespace App\Http\Controllers;
use App\Models\ucModel;
use Illuminate\Http\Request;
 
class ucController extends Controller
{
    public function cadastrarUc(){
        return view('paginas.unidadesCurriculares');
    }//fim do metodo de direcionamento
 
    public function inserirUc(Request $request){
        $codigoUc           = $request->input('codigoUc');
        $nome               = $request->input('nome');
        $cargaHoraria       = $request->input('cargaHoraria');
        $dias               = $request->input('dias');
        $presencaMinima     = $request->input('presencaMinima');
        $descricao          = $request->input('descricao');
        $status             = $request->input('status');
 
        //chamando model
        $model = new ucModel();
 
        $model->codigoUc       = $codigoUc;
        $model->nome           = $nome;
        $model->cargaHoraria   = $cargaHoraria;
        $model->dias           = $dias;
        $model->presencaMinima = $presencaMinima;
        $model->descricao      = $descricao;
        $model->status         = $status;
 
        $model->save();
        return redirect('/');
    }//fim do metodo inserir
 
    public function consultarUc(){
        $ids = ucModel::all();
        return view('paginas.unidadesCurriculares',compact('ids'));
    }//fim do metodo de consulta
 
    public function editarUc($id){
        $dado = ucModel::findOrFail($id);
        return view('paginas.editarUnidadesCurriculares', compact('dado'));
    }//fim do metodo editar
 
    public function atualizarUc (Request $request, $id){
        ucModel::where('id', $id)->update($request->all());
        return redirect('/consultar');
    }//fim do metodo atualizar
 
    public function excluirUc (Request $request, $id){
        ucModel::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do metodo excluir
}