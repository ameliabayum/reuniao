<x-layout title="Editar Sala">
    <div class="row m-2">
        <div class="col-md-12 p-2">

            <form method="POST" action="{{ route('salas.update', $sala->id) }}">
                @csrf
                @method('PUT')
                <div class="container">
                    <section>
                        <label for="nome_sala" class="col-sm-2 col-form-label">Nome da Sala</label>
                        <input type="text" class="form-control" id="nome_sala" name="nome_sala"
                            value="{{$sala->nome_sala}}">
                    </section>
                    <section>
                        <label for="horario_abertura" class="col-sm-2 col-form-label">Horário de Abertura</label>
                        <input type="time" class="form-control" id="horario_abertura" name="horario_abertura"
                            value="{{$sala->horario_abertura}}">
                    </section>
                    <section>
                        <label for="horario_fechamento" class="col-sm-2 col-form-label">Horário de Fechamento</label>
                        <input type="time" class="form-control" id="horario_fechamento" name="horario_fechamento"
                            value="{{$sala->horario_fechamento}}">
                    </section>

                    <section class="my-3">
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <a href="/salas" class="btn btn-secondary">Voltar</a>
                    </section>
                </div>
            </form>


        </div>

    </div>


</x-layout>