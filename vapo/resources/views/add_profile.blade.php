@extends('layout')
@section('title','Editar Perfil')
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
        <form action="{{ route('criar-perfil', ['id' => Auth::id()]) }}" class="att-dados" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="file" id="imagem" name="imagem" required>
                <label for="imagem" class="label imagem">Adicione sua foto de perfil</label>
            </div>
            <div class="input-group">
                <input type="text" name="name" id="name" value="{{$user->name}}" readonly>
                <label class="label" for="name">Nome Completo</label>
            </div>
            <div class="input-group">
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required oninput="formatarCpf(this)">
                <label class="label cpf" for="cpf">CPF</label>
            </div>
            <div class="input-group">
                <input type="tel" name="celular" id="celular" placeholder="Digite seu Celular" oninput="formatarCelular(this)" required>
                <label class="label cel" for="celular">Celular</label>

            </div>
            <div class="input-group">
                <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" oninput="formatarCep(this)" required>
                <label class="label emai" for="cep">CEP</label>
            </div>
            
            <div class="input-group-nasc">
                <input type="date" name="nasc" id="nasc" required>
                <label class="label-nasc" for="nasc">Data de Nascimento</label>
            </div>
            <div class="buttons-form">
                
                <button type="submit" class="sumbit-btn">SALVAR ALTERAÇÕES</button>
            </div>
        </form>
        <div class="buttons-form">
            <form action="{{ route('apagar-conta', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="aref"><span>EXCLUIR MINHA CONTA</span></button>
            </form>
        </div>

    </div>
    <div class="dados-basicos">
        <div class="titulo-basicos">
            <i class="bi bi-geo-alt-fill"></i>
            <h3>ENDEREÇOS</h3>
        </div>
        <div class="div-end">
            <div class="end">
                <div class="padrao">
                    <h3>Endereço Principal</h3>
                    <h2>(PADRÃO)</h2>
                </div>
                <div class="spans-end">
                    <span>Seu endereço</span>
                    <span>Seu número</span>
                    <span>Seu cep</span>
                </div>
                <div class="button-end">
                    <a href="#">EDITAR</a>
                </div>
            </div>
        </div>
        <div class="buttons-end">
            <button class="add-end">CADASTRAR NOVO ENDEREÇO</button>
        </div>
    </div>
</div> 
</div>   
@endsection