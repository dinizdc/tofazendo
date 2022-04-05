@extends('layouts.base')

@section('css-extra')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
@endsection
@section('conteudo')
    <div class="card">
        <div class="card-header">
            <strong>Colaboradores</strong><small> - Lista de colaboradores ativos</small>
            <button class="btn-sm btn-primary ml-4 mb-1 float-right mt-1" data-toggle="modal"
                data-target="#colaboradorModal">
                Adicionar Colaborador
            </button>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th class="avatar">Avatar</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de nascimento</th>
                        <th>CPF</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colaboradores as $colaborador)
                        <tr>
                            <td class="serial">{{ ++$loop->index }}</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#">
                                        <img src="data:image/jpeg;base64,{{ base64_encode($colaborador->foto_perfil) }}"
                                            alt="foto de perfil">
                                    </a>
                                </div>
                            </td>
                            <td> {{ $colaborador->id }} </td>
                            <td> <span class="name">{{ $colaborador->user->name }}</span> </td>
                            <td> <span
                                    class="product">{{ date('d/m/Y', strtotime($colaborador->data_nascimento)) }}</span>
                            </td>
                            <td><span>{{ $colaborador->cpf }}</span></td>
                            <td>
                                <span class="badge badge-complete">{{ $colaborador->status }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
        @if ($colaboradores->count() > 0)
            <div class="card-footer">
                {{ $colaboradores->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
    {{-- FAB MODAL --}}

    {{-- FIM FAB MODAL --}}
    {{-- MODAL DE COLABORADOR --}}
    <div class="modal fade" id="colaboradorModal" tabindex="-1" role="dialog" aria-labelledby="colaboradorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <form action="{{ route('colaboradores.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header"><strong>Colaboradores</strong><small> - Formulário de
                                    cadastro</small>
                            </div>
                            <div class="card-body card-block">
                                {{-- FOTO --}}
                                <img id="target" height="250" width="250" />
                                <div class="row form-group md-3">
                                    <div class="col col-md-3">
                                        <label for="foto_perfil" class=" form-control-label">Foto para o perfil</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="foto_perfil" name="foto_perfil" class="form-control-file"
                                            onchange="putImage()">
                                    </div>
                                </div>
                                {{-- USUÁRIOS --}}
                                <br>
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="user_id" class=" form-control-label">Usuários</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="user_id" id="user_id" class="form-control-sm form-control">
                                            <option selected>Selecione um usuário</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                {{-- NASCIMENTO --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="data_nascimento" class=" form-control-label">Data de nascimento</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="data_nascimento" name="data_nascimento"
                                            placeholder="Digite a data de nascimento" class="form-control">
                                    </div>
                                </div>
                                <br>
                                {{-- CPF --}}
                                <div class="row form-group  md-3">
                                    <div class="col col-md-3">
                                        <label for="cpf" class=" form-control-label">CPF</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF"
                                            class="form-control" onkeypress="$(this).mask('000.000.000-00');">
                                    </div>
                                </div>
                                {{-- Status --}}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label class=" form-control-label">Colaborador
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
@endsection
@section('js-extra')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
    <script src="https://unpkg.com/jcrop"></script>
    <script>
        function showImage(src, target) {
            var fr = new FileReader();

            fr.onload = function() {
                target.src = fr.result;
            }
            fr.readAsDataURL(src.files[0]);

        }

        function putImage() {
            var src = document.getElementById("foto_perfil");
            var target = document.getElementById("target");
            showImage(src, target);
        }
    </script>
    <script>
        // Jcrop.attach('target');
    </script>
@endsection
