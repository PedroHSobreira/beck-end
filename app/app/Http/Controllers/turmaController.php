<?php

namespace App\Http\Controllers;

use App\Models\turmaModel;
use App\Models\cursoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class turmaController extends Controller
{
    public function cadastrarTurma()
    {
        return view('paginas.');
    } //fim do metodo de direcionamento

    public function inserirTurma(Request $request)
    {
        $cursoModel = cursoModel::findOrFail($request->curso_id);
        //busca a última turma desse curso
        $ultimaTurma = turmaModel::where('curso_id', $cursoModel->id)
            ->orderBy('id', 'desc')
            ->first();
        //define número sequencial
        if ($ultimaTurma) {
            // Ex: TI22M → extrai 22
            preg_match('/(\d+)/', $ultimaTurma->codigoTurma, $matches);
            $numeroSequencial = intval($matches[1]) + 1;
        } else {
            $numeroSequencial = 1; // número inicial padrão
        }

        //monta o código da turma
        $codigoTurma = $cursoModel->codigoCurso . $numeroSequencial . $request->turno;

        $codigoTurma    = $request->input('codigoTurma');
        $dataInicio     = $request->input('dataInicio');
        $dataFim        = $request->input('dataFim');
        $turno          = $request->input('turno');
        $status         = $request->input('status');

        //chamando model
        $model = new turmaModel();
        $model->codigoTurma     = $codigoTurma;
        $model->dataInicio      = $dataInicio;
        $model->dataFim         = $dataFim;
        $model->turno           =   $turno;
        $model->status          = $status;

        $model->save();
        return redirect('/');
    } //fim do metodo inserir

    public function consultarTurma()
    {
        $ids = turmaModel::all();
        return view('paginas.turmas', compact('ids'));
    } //fim do metodo de consulta

    public function editarTurma($id)
    {
        $dado = turmaModel::findOrFail($id);
        return view('paginas.editarTurmas', compact('dado'));
    } //fim do metodo editar

    public function atualizarTurma(Request $request, $id)
    {
        turmaModel::where('id', $id)->update($request->all());
        return redirect('/consultar');
    } //fim do metodo atualizar

    public function excluirTurma(Request $request, $id)
    {
        turmaModel::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    } //fim do metodo excluir
}
