<?php
 
use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/',[\App\Http\Controllers\authController::class,'home']);
Route::get('/login',[\App\Http\Controllers\authController::class,'login']);

//dashboard
Route::get('/dashboardAdm',[\App\Http\Controllers\administradorController::class,'consultarAdministrador']);
Route::get('/inserir', [\App\Http\Controllers\administradorController::class,'inserirAdministrador']);
//curso
Route::get('/cursos',[\App\Http\Controllers\cursoController::class,'consultarCurso']);
Route::post('/inserir',[\App\Http\Controllers\cursoController::class,'inserirCurso']);
Route::get('/editarCurso/{id}', [\App\Http\Controllers\cursoController::class,'editarCursos']);
Route::post('/atualizarCurso/{id}', [\App\Http\Controllers\cursoController::class,'atualizarCurso']);
Route::get('/excluirCurso/{id}', [\App\Http\Controllers\cursoController::class, 'excluirCurso']);
//uc
Route::get('/unidadesCurriculares',[\App\Http\Controllers\ucController::class,'consultarUc']);
Route::get('/editarUnidadesCurriculares/{id}',[\App\Http\Controllers\ucController::class,'editarUc']);
//docente
Route::get('/docentes',[\App\Http\Controllers\docenteController::class,'consultarDocente']);
Route::get('/inserir',[\App\Http\Controllers\docenteController::class,'inserirDocente']);
Route::get('/editarDocentes/{id}',[\App\Http\Controllers\docenteController::class,'editarDocente']);
//aluno
Route::get('/alunos', [\App\Http\Controllers\alunoController::class, 'consultarAluno']);
Route::post('/alunos', [\App\Http\Controllers\alunoController::class, 'inserirAluno']);
Route::get('/editarAlunos/{id}', [\App\Http\Controllers\alunoController::class, 'editarAluno']);
//turma
Route::get('/turmas', [\App\Http\Controllers\turmaController::class, 'consultarTurma']);
//relatorio
Route::get('/relatorios', [\App\Http\Controllers\relatorioController::class, 'consultarRelatorio']);
