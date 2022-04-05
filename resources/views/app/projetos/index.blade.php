@extends('layouts.base')

@section('css-extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
@endsection
@section('conteudo')
    <div class="card">
        <div class="card-header">
            <strong>Colaboradores</strong><small> - Lista de Projetos</small>
            <button class="btn-sm btn-primary ml-4 mb-1 float-right mt-1" data-toggle="modal" data-target="#projetoModal">
                Adicionar Projeto
            </button>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th class="avatar">Nome</th>
                        <th>Sigla</th>
                        <th>Descrição</th>
                        <th>Linguagem Base</th>
                        <th>Framework</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Adicionado por</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projetos as $projeto)
                        <tr>
                            <td class="serial">{{ ++$loop->index }}</td>
                            <td class="name"> {{ $projeto->nome }} </td>
                            <td> {{ $projeto->sigla }} </td>
                            <td> {{ $projeto->descricao }} </td>
                            <td> {{ $projeto->linguagem_base }} </td>
                            <td> {{ $projeto->framework }} </td>
                            <td> {{ $projeto->url }} </td>
                            <td> {{ $projeto->status }} </td>
                            <td> {{ $projeto->colaborador->user->name ?? '' }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
        @if ($projetos->count() > 0)
            <div class="card-footer">
                {{ $projetos->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
    {{-- FAB MODAL --}}
    {{-- FIM FAB MODAL --}}
    {{-- MODAL NOVO PROJETO --}}
    {{-- MODAL DE COLABORADOR --}}
    <div class="modal fade" id="projetoModal" tabindex="-1" role="dialog" aria-labelledby="projetoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <form action="{{ route('projetos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header"><strong>Colaboradores</strong><small> - Formulário de
                                    cadastro</small>
                            </div>
                            <div class="card-body card-block">
                                {{-- NOME --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="nome" class=" form-control-label">Nome</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nome" name="nome" placeholder="Digite o nome do projeto"
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- SIGLA --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="sigla" class=" form-control-label">Sigla</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="sigla" name="sigla" placeholder="Digite a sigla do projeto"
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- DESCRIÇÃO --}}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="descricao"
                                            class=" form-control-label">Descrição</label></div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="descricao" id="descricao" rows="5" placeholder="Descreva o projeto..."
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                {{-- LINGUAGEM BASE --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="linguagem_base" class=" form-control-label">Linguagem Principal</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="linguagem_base" name="linguagem_base" placeholder="COBOL..."
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- FRAMEWORK --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="framework" class=" form-control-label">Framework</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="framework" name="framework" placeholder="SPRING..."
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- URL --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="url" class=" form-control-label">Endereço URL do projeto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="url" name="url" placeholder="127.0.0.1..."
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- Status --}}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Projeto
                                            ativo?</label></div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="status" class="form-check-label ">
                                                    <input type="checkbox" id="status" name="status" value="1"
                                                        class="form-check-input">Sim
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
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
    {{-- FIM MODAL PROJETO --}}
@endsection
@section('js-extra')
@endsection
