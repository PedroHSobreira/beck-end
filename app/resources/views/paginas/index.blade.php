<x-layout titulo="Login - Senac">
        <div class="main" action="login">
            <div class="login-box shadow-lg">
                <div class="title">
                    <img src="/images/logo-senac.png" alt="logotipo SENAC" width="420">
                </div>
 
                <fieldset class="d-flex">
                    <label class="d-flex btn btn-outline-primary" style="margin: auto;">
                        <input type="radio" name="opcao" value="3" class="" checked/>
                        <span><i class="bi bi-backpack"></i> Estudante</span>
                    </label>
                    <label class="d-flex btn btn-outline-primary" style="margin: auto;">
                        <input type="radio" name="opcao" value="2" class="" />
                        <span><i class="bi bi-clipboard-data"></i> Professor</span>
                    </label>
                    <label class="d-flex btn btn-outline-primary" style="margin: auto;">
                         <input type="radio" name="opcao" value="1" class=""/>
                         <span><i class="bi bi-buildings"></i> Administrador</span>
                     </label>
                </fieldset>
 
                <form action="login" method="GET">
                    <div id="formLogin">
                        <h4>Login</h4>
                        <p>Entre com suas credenciais</p>
 
                        <div class="row">
                            <div class="col">
                                <label for="lCpf" class="form-label">Email: </label>
                                <input type="text" class="form-control" id="email" name="emailLogin"
                                    placeholder="email@senacsp.edu.br">
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col">
                                <label for="emailse" class="form-label">Senha: </label>
                                <input type="password" class="form-control" id="senha" name="senhaLogin"
                                    placeholder="********">
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col text-end">
                                <a href="dashboardAdm" type="button" class="btn btn-primary w-100">Entrar</a>
                            </div>
                        </div>
                    </div>
                </form>
 
            </div>
        </div>
</x-layout>