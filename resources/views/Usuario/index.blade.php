<x-layout title="Usuários">
    <div class="row m-2">
        <div class="col-md-12 text-end "><a href="/usuarios/create" class="btn btn-primary">Adicionar Usuário</a></div>
        @foreach ($usuarios as $data)
        <div class="col-md-3 col-sm-3">
            <section class="card  p-2">
                <div class="card-body">
                    <p class="card-text"><span class="fw-semibold">Nome:</span> {{$data->nome_usuario}}</p>
                    <p class="card-text"><span class="fw-semibold">Email:</span> {{$data->email_usuario}}</p>
                    <p class="card-text"><span class="fw-semibold">Perfil:</span>
                        {{$data->perfis->descricao_perfil}}
                    </p>
                </div>
                <section class="ms-3">
                    <div class="row">
                        <div class="col-md-2 col-sm-12"><a href="{{ route('usuarios.edit', $data->id) }}"
                                class="btn btn-warning text-light">Editar</a></div>
                        <div class="col-md-3 col-sm-12">
                            <form method="POST" class="form" action="{{ route('usuarios.destroy', $data->id) }}">
                                @csrf
                                <button type="submit" value="Excluir" class="btn btn-danger">Excluir</button>

                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        @endforeach
    </div>
</x-layout>
<div aria-live="polite" aria-atomic="true" class="position-relative" style="top:-500px;">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <div class="toast-container top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Mensagem</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @if(isset($msg))
                {{$msg}}
                @endif
            </div>
        </div>
    </div>
</div>
@if(isset($msg))
<script>
const toastLiveExample = document.getElementById('liveToast')
const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
toastBootstrap.show()
</script>
@endif