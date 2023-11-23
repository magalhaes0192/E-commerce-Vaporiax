@extends('layout')
@section('title', 'Editar Perfil')
@section('conteudo')
    <div class="main">
        <div class="dados-basicos" style="margin-bottom: 30px">
            <div class="titulo-basicos">
                <i class="bi bi-geo-alt-fill"></i>
                <h3>ENDEREÇOS</h3>
            </div>
            <div class="add-enderecos">
                <form action="{{ route('adicionar-endereco', ['id' => $user]) }}" class="add-dados" method="post"
                    enctype="multipart/form-data" id="form">
                    @csrf
                    <h3 style="text-align: center; color: white;" id="fechar-h3">Cadastro novo endereço</h3>
                    <div class="input-groups">
                        <div class="input-group1">
                            <input type="text" id="rua" name="rua" placeholder="Digite seu endereço" required>
                            <label for="rua" class="label cel">Endereço</label>
                        </div>
                        <div class="input-group1">
                            <input type="text" name="numero" id="numero"
                                placeholder="Digite o número de sua casa/apto" required>
                            <label class="label cel" for="numero">Número</label>
                        </div>
                    </div>
                    <div class="input-groups">
                        <div class="input-group1">
                            <input type="text" name="bairro" id="bairro" placeholder="Digite seu Bairro" required>
                            <label class="label cel" for="bairro">Bairro</label>
                        </div>
                        <div class="input-group1">
                            <input type="tel" name="cidade" id="cidade" placeholder="Digite seu Cidade" required>
                            <label class="label cel" for="cidade">Cidade</label>
                        </div>
                    </div>
                    <div class="input-groups">
                        <div class="input-group1">
                            <input type="text" name="CEP" id="cep" placeholder="Digite seu CEP"
                                oninput="formatarCep(this)">
                            <label class="label emai" for="cep">CEP</label>
                        </div>
                        <div class="input-group1">
                            <select id="estado" name="estado">
                                <option value="" disabled selected>Selecione um estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                            <label class="label cel" for="estado">Estado</label>
                        </div>
                    </div>
                    <div class="input-groups">
                        <div class="input-group1">
                            <select id="endTipo" name="endTipo">
                                <option value="" disabled selected>Selecione o tipo de endereço</option>
                                <option value="Casa" class="options">Casa</option>
                                <option value="Trabalho" class="options">Trabalho</option>
                            </select>
                            <label for="estado" class="label">Tipo de Endereço</label>
                        </div>
                        <div class="input-group1">
                            <select name="endPadrao" id="endPadrao">
                                <option value="" disabled selected>Selecione se o endereço é padrão</option>
                                <option value="Padrão" class="options">Padrão</option>
                                <option value="Não padrão" class="options">Não padrão</option>
                            </select>
                            <label for="endPadrao" class="label-nasc">Endereço é padrão ?</label>
                        </div>
                    </div>
                    <div class="buttons-form">
                        <button type="submit" class="sumbit-btn" style="width: 100%">ADICIONAR ENDEREÇO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
