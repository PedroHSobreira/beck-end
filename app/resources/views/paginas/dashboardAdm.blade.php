<x-layout titulo="Dashboard - Senac">
    <div class="container-xl py-4 shadow">
        <!-- Abas -->
        <ul class="nav nav-pills gap-2 mb-4">
            <li class="nav-item">
                <a class="btn btn-primary active" href="dashboardAdm"><i class="bi bi-speedometer2 me-1"></i>
                    Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="cursos"><i class="bi bi-clipboard2-check me-1"></i> Cursos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary " href="unidadesCurriculares"><i class="bi bi-people me-1"></i> UCs</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="docentes"><i class="bi bi-calendar2-event me-1"></i> Docentes</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="alunos"><i class="bi bi-graph-up-arrow me-1"></i> Alunos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="turmas"><i class="bi bi-graph-up-arrow me-1"></i> Turmas</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="relatorios"><i class="bi bi-graph-up-arrow me-1"></i>
                    Relatórios</a>
            </li>
        </ul>

        <!-- Conteúdo Principal Dashboard -->

        <section class="container-fluid">
            <!-- Título -->
            <div class="mb-4">
                <h2 class="fw-bold">Dashboard</h2>
                <p class="text-muted">Bem-vindo ao Sistema de Gestão Acadêmica SENAC</p>
            </div>

            <!-- Cards de resumo -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="card hover-shadow">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Total de Cursos</small>
                                <h3 class="fw-bold mb-0">{{ $totalCursos }}</h3>
                            </div>
                            <div class="bg-primary text-white p-2">
                                <i class="bi bi-book fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card hover-shadow">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Total de Docentes</small>
                                <h3 class="fw-bold mb-0">{{ $totalDocentes }}</h3>
                            </div>
                            <div class="bg-warning text-white p-2">
                                <i class="bi bi-mortarboard fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card hover-shadow">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Total de Alunos</small>
                                <h3 class="fw-bold mb-0">{{ $totalAlunos }}</h3>
                            </div>
                            <div class="bg-success text-white p-2">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card hover-shadow">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted">Turmas Ativas</small>
                                <h3 class="fw-bold mb-0">{{ $turmasAtivas }}</h3>
                            </div>
                            <div class="bg-purple text-white p-2">
                                <i class="bi bi-diagram-3 fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ações rápidas -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Ações Rápidas</h5>

                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn btn-outline-warning w-100 py-3 text-start" style="color: black;"
                                data-bs-toggle="modal" data-bs-target="#modalNovoCurso">
                                <i class="bi bi-book me-1"></i>
                                <strong>Novo Curso</strong><br>
                                <small>Cadastrar curso</small>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" class="btn btn-outline-warning w-100 py-3 text-start" style="color: black;"
                                data-bs-toggle="modal" data-bs-target="#modalNovoDocente">
                                <i class="bi bi-mortarboard me-1"></i>
                                <strong>Novo Docente</strong><br>
                                <small>Cadastrar docente</small>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" class="btn btn-outline-warning w-100 py-3 text-start" style="color: black;"
                                data-bs-toggle="modal" data-bs-target="#modalNovoAluno">
                                <i class="bi bi-person-plus me-1"></i>
                                <strong>Novo Aluno</strong><br>
                                <small>Matricular aluno</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gestão de vínculos -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-2">
                        <i class="bi bi-link-45deg me-1"></i>
                        Gestão de Vínculos
                    </h5>
                    <p class="text-muted">
                        Gerencie os relacionamentos entre alunos, turmas, cursos, UCs e docentes
                    </p>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-light border-black w-100 text-start py-3" style="color: black;">
                                <i class="bi bi-person-lines-fill me-2"></i>
                                <strong>Aluno → Turma</strong><br>
                                <small>Matricular em turma</small>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#" class="btn btn-light border-black w-100 text-start py-3" style="color: black;">
                                <i class="bi bi-journal-bookmark me-2"></i>
                                <strong>Curso → UCs</strong><br>
                                <small>Vincular UCs ao curso</small>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#" class="btn btn-light border-black w-100 text-start py-3" style="color: black;">
                                <i class="bi bi-mortarboard me-2"></i>
                                <strong>Docente → Cursos</strong><br>
                                <small>Atribuir a cursos</small>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#" class="btn btn-light border-black w-100 text-start py-3" style="color: black;">
                                <i class="bi bi-people me-2"></i>
                                <strong>Docentes → UC</strong><br>
                                <small>Múltiplos docentes</small>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#" class="btn btn-light border-black w-100 text-start py-3" style="color: black;">
                                <i class="bi bi-diagram-2 me-2"></i>
                                <strong>Docente → Turmas</strong><br>
                                <small>Múltiplas turmas</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal Novo Curso -->
        <div class="modal fade" id="modalNovoCurso" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4 border-0">

                    <!-- Header -->
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold">Novo Curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Form -->
                    <form action="" method="POST">
                        <!-- @csrf -->

                        <div class="modal-body">
                            <div class="row">
                                <!-- Nome -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Nome do Curso *</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Ex: Técnico de TI"
                                        required>
                                </div>

                                <!-- Tipo -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Tipo *</label>
                                    <select name="tipo" class="form-select" required>
                                        <option value="">Selecione o tipo</option>
                                        <option value="tecnico">Técnico</option>
                                        <option value="graduacao">Graduação</option>
                                        <option value="livre">Curso Livre</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Carga Horária -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Carga Horária (horas) *</label>
                                    <input type="number" name="carga_horaria" class="form-control" min="0" value="0"
                                        required>
                                </div>

                                <!-- Turno -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Turno *</label>
                                    <select name="turno" class="form-select" required>
                                        <option value="">Selecione o turno</option>
                                        <option value="manha">Manhã</option>
                                        <option value="tarde">Tarde</option>
                                        <option value="noite">Noite</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Horário -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Horário *</label>
                                    <input type="text" name="horario" class="form-control" placeholder="08:00 - 12:00"
                                        required>
                                </div>

                                <!-- Data Início -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Data de Início *</label>
                                    <input type="date" name="data_inicio" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Preço -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Preço (R$) *</label>
                                    <input type="number" name="preco" class="form-control" min="0" step="0.01" value="0"
                                        required>
                                </div>

                                <!-- Vagas -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Número de Vagas *</label>
                                    <input type="number" name="vagas" class="form-control" min="0" value="0" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Bolsas -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Bolsas de Estudo</label>
                                    <input type="number" name="bolsas" class="form-control" min="0" value="0">
                                </div>

                                <!-- Status -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="ativo" selected>Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer border-0 filter-tabs">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-warning text-white px-4">
                                Salvar
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- FIM DO MODAL -->

        <!-- Modal Novo Docente -->
        <div class="modal fade" id="modalNovoDocente" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4 border-0">

                    <!-- Header -->
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold">Novo Docente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Form -->
                    <form action="" method="POST">
                        <!-- @csrf -->

                        <div class="modal-body">
                            <div class="row">

                                <!-- Nome -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Nome Completo *</label>
                                    <input type="text" name="nome" class="form-control"
                                        placeholder="Nome completo do docente" required>
                                </div>

                            </div>

                            <div class="row">
                                <!-- CPF -->
                                <div class="col">
                                    <label class="form-label fw-semibold">CPF *</label>
                                    <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00"
                                        required>
                                </div>

                                <!-- Data de Nascimento -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Data de Nascimento *</label>
                                    <input type="date" name="data_nascimento" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">

                                <!-- Endereço -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Endereço *</label>
                                    <input type="text" name="endereco" class="form-control"
                                        placeholder="Rua, número, bairro, cidade" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telefone -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Telefone *</label>
                                    <input type="text" name="telefone" class="form-control"
                                        placeholder="(00) 00000-0000" required>
                                </div>

                                <!-- Email -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Email *</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="email@senacsp.edu.br" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Formação -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Formação (Graduação)</label>
                                    <input type="text" name="formacao" class="form-control"
                                        placeholder="Ex: Ciência da Computação">
                                </div>
                                <!-- Especialização -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Especialização (Pós)</label>
                                    <input type="text" name="especializacao" class="form-control"
                                        placeholder="Ex: Banco de dados">
                                </div>
                            </div>

                            <div class="row">
                                <!-- Carga Horária Diária -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Carga Horária Diária *</label>
                                    <select name="cargaHoraria" class="form-select">
                                        <option value="4">4 horas</option>
                                        <option value="6">6 horas</option>
                                        <option value="8" selected>8 horas</option>
                                    </select>
                                </div>

                                <!-- Turno de Trabalho -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Turno *</label>
                                    <select name="turno" class="form-select" required>
                                        <option value="">Selecione o turno</option>
                                        <option value="manha">Manhã</option>
                                        <option value="tarde">Tarde</option>
                                        <option value="noite">Noite</option>
                                        <option value="integral">Integral</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Carga Horária Diária -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Data de Cadastro</label>
                                    <input type="text" class="form-control" value="{{ now()->format('d/m/Y') }}"
                                        readonly>
                                </div>

                                <!-- Status -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="ativo" selected>Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer border-0 filter-tabs">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-warning text-white px-4">
                                Salvar
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- FIM DO MODAL -->

        <!-- Modal Novo Aluno -->
        <div class="modal fade" id="modalNovoAluno" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4 border-0">

                    <!-- Header -->
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold">Novo Aluno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Form -->
                    <form action="" method="POST">
                        <!-- @csrf -->

                        <div class="modal-body">
                            <div class="row">

                                <!-- Nome -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Nome Completo *</label>
                                    <input type="text" name="nome" class="form-control"
                                        placeholder="Nome completo do aluno" required>
                                </div>

                            </div>

                            <div class="row">
                                <!-- RA do Aluno -->
                                <div class="col">
                                    <label class="form-label fw-semibold">RA (Registro Acadêmico) *</label>
                                    <input type="text" name="ra" class="form-control" placeholder="1140279318" required>
                                </div>
                                <!-- CPF -->
                                <div class="col">
                                    <label class="form-label fw-semibold">CPF *</label>
                                    <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00"
                                        required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Data de Nascimento -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Data de Nascimento *</label>
                                    <input type="date" name="data_nascimento" class="form-control" required>
                                </div>
                                <!-- Data de Matrícula -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Data de Matrícula</label>
                                    <input type="text" name="" class="form-control" value="{{ now()->format('d/m/Y') }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Endereço -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Endereço *</label>
                                    <input type="text" name="endereco" class="form-control"
                                        placeholder="Rua, número, bairro, cidade" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Telefone -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Telefone *</label>
                                    <input type="text" name="telefone" class="form-control"
                                        placeholder="(00) 00000-0000" required>
                                </div>

                                <!-- Email -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Email *</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="email@senacsp.edu.br" required>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Carga Horária Diária -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Tipo de Matrícula *</label>
                                    <select name="tipoMatricula" class="form-select">
                                        <option value="pagante" selected>Pagante</option>
                                        <option value="bolsista">Bolsista</option>
                                    </select>
                                </div>

                                <!-- Status -->
                                <div class="col">
                                    <label class="form-label fw-semibold">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="ativo" selected>Ativo</option>
                                        <option value="inativo">Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer border-0 filter-tabs">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-warning text-white px-4">
                                Salvar
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- FIM DO MODAL -->
    </div>
</x-layout>