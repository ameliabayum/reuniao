
<x-layout title="Usuários">
    <div class="row  m-2">
        <div class="col-md-12 text-end "><a href="/usuarios/create" class="btn btn-primary">Adicionar Usuário</a></div>
        <div class="col-md-12 ">
            @foreach ($usuarios as $data)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    
                 
                    <p class="card-text"><span class="fw-semibold">Nome:</span> {{$data->nome_usuario}}</p>
                    <p class="card-text"><span class="fw-semibold">Email:</span> {{$data->email_usuario}}</p>
                    <p class="card-text"><span class="fw-semibold">Perfil:</span> {{$data->}}</p>
                    
                    </div>
              </div>
            @endforeach

        </div>

      </div>
</x-layout>