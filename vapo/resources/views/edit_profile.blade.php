@extends('layout')
@section('title', 'Editar Perfil')
@section('conteudo')
    <nav class="lateral-menu" id="lateral-menu">
        <ul>
            <li class="item-menu">
                <a href="perfil.php">
                    <span class="icon-link"><i class="bi bi-house-fill"></i></span>
                    <span class="txt-link">Início</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="editar_perfil.php">
                    <span class="icon-link"><i class="bi bi-person-fill"></i></span>
                    <span class="txt-link">Meus Dados</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon-link"><i class="bi bi-basket2-fill"></i></span>
                    <span class="txt-link">Meus Pedidos</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon-link"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span class="txt-link">Avaliações e Comentários</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon-link"><i class="bi bi-heart-fill"></i></span>
                    <span class="txt-link">Favoritos</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="edit-perfil">
        <div class="perfil-edit">
            <div class="titulo-pefil">
                <i class="bi bi-person-fill"></i>
                <h3>MEUS DADOS</h3>
            </div>
            <div class="meus-dados">
                <div class="dados-basicos">
                    <div class="titulo-basicos">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <h3>DADOS BÁSICOS</h3>
                    </div>
                    <div class="alterar-button">
                        <button>ALTERA E-MAIL</button>
                        <button>ALTERA SENHA</button>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('editar-perfil', ['id' => $perfil->user_id]) }}" class="att-dados" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="file" id="imagem" name="imagem" accept="imagem/*"
                                value="{{ $perfil->imagem }}">
                            <label for="imagem" class="label imagem">Altere sua foto de perfil</label>
                        </div>
                        <div class="input-group">
                            <input type="text" name="name" id="name" value="{{ $user->name }}" readonly>
                            <label class="label" for="name">Nome Completo</label>
                        </div>
                        <div class="input-group">
                            <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF"
                                value="{{ $perfil->cpf }}" readonly>
                            <label class="label cpf" for="cpf">CPF</label>
                        </div>
                        <div class="input-group">
                            <input type="tel" name="celular" id="celular" value="{{ $perfil->celular }}"
                                placeholder="Digite seu Celular" oninput="formatarCelular(this)">
                            <label class="label cel" for="celular">Celular</label>

                        </div>
                        <div class="input-group">
                            <input type="text" name="cep" id="cep" placeholder="Digite seu CEP"
                                value="{{ $perfil->cep }}" oninput="formatarCep(this)">
                            <label class="label emai" for="cep">CEP</label>

                        </div>
                        <div class="input-group-nasc">
                            <input type="date" name="nasc" id="nasc" value="{{ $perfil->nasc }}">
                            <label class="label-nasc" for="nasc">Data de Nascimento</label>
                        </div>
                        <div class="buttons-form">
                            <button type="submit" class="sumbit-btn">SALVAR ALTERAÇÕES</button>
                        </div>
                    </form>
                    <div class="deletar-form">
                        <form action="{{ route('apagar-conta', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="aref" id="deletar"><span>EXCLUIR MINHA CONTA</span></button>
                        </form>
                    </div>
                </div>

                <div class="dados-basicos">
                    <div class="titulo-basicos">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h3>ENDEREÇOS</h3>
                    </div>
                    <div class="div-end">
                        @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                    @endif
                        @if ($user->enderecos->isEmpty())
                            <div class="end">
                                <div class="padrao">
                                    <h3>Você não possui nenhum endereço cadastrado!!</h3>
                                </div>
                            </div>
                        @else
                            @foreach ($enderecos as $endereco)
                                <div class="end">
                                    <div class="padrao">
                                        <h3>Endereço de {{ $endereco->endTipo }}</h3>
                                        @if ($endereco->endPadrao === 'Padrão')
                                            <h2>({{ $endereco->endPadrao }})</h2>
                                        @endif
                                    </div>

                                    <div class="spans-end">
                                        <span>{{ $endereco->rua }}</span>
                                        <span>{{ $endereco->bairro }}{{ $endereco->cidade }}{{ $endereco->estado }}
                                            n°{{ $endereco->numero }}</span>
                                        <span>{{ $endereco->CEP }}</span>
                                        <div class="button-end">
                                            <form action="{{ route('apagar-endereco', [ 'enderecoId' => $endereco->id, 'id' =>$user->id]) }}" id="deleteForm_" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="aref"  onclick="exibirConfirmacao({{ $endereco->id }})" id="deletar"><span>EXCLUIR MINHA CONTA</span></button>
                                            </form>
                                            <a href="{{ route('exibir-endereco', ['enderecoId' => $endereco->id, 'id' =>$user->id]) }}">EDITAR</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="buttons-end" id="btn-end">
                        <button>
                            <a href="{{ route('mostrar-endereco', ['id' => $user->id]) }}"
                                style="color: black">Adicionar endereço</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
