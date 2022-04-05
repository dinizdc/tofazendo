@extends('layouts.base')

@section('css-extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <meta name="_token" content="{{ csrf_token() }}" />
@endsection
@section('conteudo')
    <div class="card">
        <div class="card-header">
            <strong>Tarefas</strong><small> - Lista de Tarefas</small>
            <button class="btn-sm btn-primary ml-4 mb-1 float-right mt-1" data-toggle="modal" data-target="#tarefaModal">
                Adicionar Tarefa
            </button>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th>Projeto</th>
                        <th class="avatar">Nome</th>
                        <th>Descrição</th>

                        <th>Inserida por</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarefas as $tarefa)
                        <tr>
                            <td class="serial">{{ ++$loop->index }}</td>
                            <td> {{ $tarefa->projeto->nome }} </td>
                            <td class="name"> {{ $tarefa->nome }} </td>
                            <td> {{ $tarefa->descricao }} </td>
                            <td> {{ $tarefa->colaborador->user->name }} </td>
                            <td> <button class="btn-sm btn-success ml-4 mb-1 float-right mt-1">
                                    Vou realizar
                                </button> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
        @if ($tarefas->count() > 0)
            <div class="card-footer">
                {{ $tarefas->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
    {{-- FAB MODAL --}}
    {{-- FIM FAB MODAL --}}
    {{-- MODAL DE TAREFA --}}
    <div class="modal" id="tarefaModal" tabindex="-1" role="dialog" aria-labelledby="tarefaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="card">
                        <form action="{{ route('tarefas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header"><strong>Tarefas</strong><small> - Formulário de
                                    cadastro</small>
                            </div>
                            <div class="card-body card-block">
                                {{-- Projetos --}}
                                <br>
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="projeto_id" class=" form-control-label">Projetos</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="projeto_id" id="projeto_id" class="form-control-sm form-control">
                                            <option selected>Selecione um projeto</option>
                                            @foreach ($projetos as $projeto)
                                                <option value="{{ $projeto->id }}">{{ $projeto->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                {{-- NOME --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="nome" class=" form-control-label">Nome</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nome" name="nome" placeholder="Digite o nome da tarefa"
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- DESCRIÇÃO --}}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="descricao"
                                            class=" form-control-label">Descrição</label></div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="descricao" id="descricao" rows="5" placeholder="Descreva a tarefa..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" id="cadastrarTarefaModal" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cadastrar
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                                    <i class="fa fa-ban"></i> Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FIM MODAL TAREFAS --}}
@endsection
@section('js-extra')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#cadastrarTarefaModal').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('/tarefas-store-ajax') }}",
                    method: 'post',
                    data: {
                        projeto_id: $('#projeto_id').val(),
                        nome: $('#nome').val(),
                        descricao: $('#descricao').val()
                    },
                    success: function(result) {
                        if (result.errors) {
                            $('.alert-danger').html('');

                            $.each(result.errors, function(key, value) {
                                $('.alert-danger').show();
                                $('.alert-danger').append('<li>' + value + '</li>');
                            });
                        } else {
                            document.location.reload(true);
                            $('.alert-danger').hide();
                            $('#tarefaModal').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
@endsection
