<x-layout title="Solicitar Reunião">
    <div class="row m-2">
        <div class="col-md-12 p-2">

            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf
                <div class="container">
                    <section>
                        <label for="tema_reuniao" class="col-sm-2 col-form-label">Tema da Reunião</label>
                        <input type="text" class="form-control" id="tema_reuniao" name="tema_reuniao">
                    </section>
                    <section>
                        <label for="data_reuniao" class="col-sm-2 col-form-label">Data</label>
                        <input type="date" class="form-control" id="data_reuniao" name="data_reuniao">
                    </section>
                    <section>
                        <label for="horario_inicial" class="col-sm-2 col-form-label">Hora Inicial</label>
                        <input type="time" class="form-control" id="horario_inicial" name="horario_inicial">
                    </section>
                    <section>
                        <label for="horario_inicial" class="col-sm-2 col-form-label">Hora Inicial</label>
                        <input type="time" class="form-control" id="horario_inicial" name="horario_inicial">
                    </section>
                    <section class="my-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="/reuniao" class="btn btn-secondary">Voltar</a>
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