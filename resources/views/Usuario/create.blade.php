
<x-layout title="Cadastrar Usuário">
    <div class="row m-2">
        <div class="col-md-12 p-2">
           
        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <div class="container" >
                <section>
                    <label for="nome_usuario" class="col-sm-2 col-form-label">Nome</label>
                    <input type="text" class="form-control" id="nome_usuario" name="nome_usuario">
                </section>
                <section>
                    <label for="email_usuario" class="col-sm-2 col-form-label">Email</label>
                    <input type="email" class="form-control" id="email_usuario" name="email_usuario">
                </section>
                <section>
                    <label for="senha_usuario" class="col-sm-2 col-form-label">Senha</label>
                    <input type="password" class="form-control" id="senha_usuario" name="senha_usuario">
                </section>
                <section class="my-2">
                    <label class="" for="perfil_usuario">Perfil</label>
                    <select class="form-select" id="perfil_usuario" name="perfil_usuario">
                        <option  hidden>Selecione...</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuário</option>
                    </select>
                </section>
               
                <section class="my-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="/usuarios" class="btn btn-secondary">Voltar</a>
                </section>
            </div>
          
        </form>
           
        </div>

      </div>
      @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
</x-layout>