<?php

namespace App\Http\Controllers;

use App\Models\alunoModel;
use Illuminate\Http\Request;

class alunoController extends Controller
{
    public function cadastrarAluno()
    {
        return view('paginas.alunos');
    } //fim do metodo de direcionamento

    public function inserirAluno(Request $request)
    {
        $nomeAluno              = $request->input('nomeAluno');
        $ra                     = $request->input('ra');
        $cpf                    = $request->input('cpf');
        $dataNascimento         = $request->input('dataNascimento');
        $telefone               = $request->input('telefone');
        $emailAluno             = $request->input('emailAluno');
        $senhaAluno             = $request->input('senhaAluno');
        $dataCadastro           = $request->input('dataCadastro');
        $status                 = $request->input('status');
        $tipoMatricula          = $request->input('tipoMatricula');


        //chamando model
        $model = new alunoModel();

        $model->nomeAluno             = $nomeAluno;
        $model->ra                    = $ra;
        $model->cpf                   = $cpf;
        $model->dataNascimento        = $dataNascimento;
        $model->telefone              = $telefone;
        $model->emailAluno            = $emailAluno;
        $model->senhaAluno            = $senhaAluno;
        $model->dataCadastro          = $dataCadastro;
        $model->tipoMatricula         = $tipoMatricula;
        $model->status                = $status;

        $model->save();
        return redirect('/');
    } //fim do metodo inserir

    public function consultarAluno()
    {
        $ids = alunoModel::all();

        $totalAlunos    = alunoModel::count();
        $alunosPagantes = alunoModel::where('tipoMatricula', 'pagante')->count();
        $alunosBolsistas = alunoModel::where('tipoMatricula', 'bolsista')->count();

        return view('paginas.alunos', compact(
            'ids',
            'totalAlunos',
            'alunosPagantes',
            'alunosBolsistas'
        ));
    } //fim do metodo de consulta


    public function editarAluno($id)
    {
        $dado = alunoModel::findOrFail($id);
        return view('paginas.editarAlunos', compact('dado'));
    } //fim do metodo editar

    public function atualizarAluno(Request $request, $id)
    {
        alunoModel::where('id', $id)->update($request->all());
        return redirect('/consultar');
    } //fim do metodo atualizar

    public function excluirAluno(Request $request, $id)
    {
        alunoModel::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    } //fim do metodo excluir
}