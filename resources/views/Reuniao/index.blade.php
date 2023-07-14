<x-layout title="Reunião">
    <div class="row m-2">
        <div class="col-md-12 text-end "><a href="/reuniao/create" class="btn btn-primary">Solicitar Reunião</a></div>
        @foreach ($reunioes as $data)

        <div class="col-md-3 col-sm-3">
            <section class="card  p-2">
                <div class="card-body">
                    <p class="card-text"><span class="fw-semibold">Tema Reunião: </span>{{$data->tema_reuniao}}</p>
                    <p class="card-text"><span class="fw-semibold">Data da Reunião: </span>
                        {{date_create_from_format('Y-m-d', $data->data_reuniao)->format('d/m/Y')}}</p>
                    <p class="card-text"><span class="fw-semibold">Hora Inicial da Reunião:
                        </span> {{$data->horario_inicio}}
                    <p class="card-text"><span class="fw-semibold">Hora Final da Reunião:
                        </span> {{$data->horario_termino}}
                    <p class="card-text"><span class="fw-semibold">Status da Reunião: </span>{{$data->status_reuniao}}
                    </p>
                </div>
                <section class="ms-3">
                    <div class="row">
                        <div class="col-md-2 col-sm-12"><a href="{{ route('reuniao.edit', $data->id) }}"
                                class="btn btn-warning text-light">Editar</a></div>
                        <div class="col-md-3 col-sm-12">
                            <form method="POST" class="form" action="{{ route('reuniao.destroy', $data->id) }}">
                                @csrf
                                <button type="submit" value="Excluir" class="btn btn-danger">Excluir</button>

                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </section>
                @if($data->status_reuniao == "Pendente")
                <section class="ms-3 my-3">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 px-1">
                            <form method="POST" class="form" action="{{ route('reuniao.update', $data->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="true" name="aceitar_reuniao"> </input>
                                <button type="submit" class="btn btn-success">Aceitar</button>


                            </form>
                        </div>
                        <div class="col-md-1 col-sm-12">
                            <form method="POST" class="form" action="{{ route('reuniao.update', $data->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="true" name="negar_reuniao"></input>
                                <button type="submit" class="btn btn-danger">Negar</button>


                            </form>
                        </div>
                    </div>
                </section>
                @endif

            </section>
        </div>
        @endforeach
    </div>
</x-layout>
<div aria-live="polite" aria-atomic="true" class="position-relative" style="top:-570px;">
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