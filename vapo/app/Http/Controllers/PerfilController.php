<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class PerfilController extends Controller
{

    public function index($id)
    {
        $userName = null;
        $perfil = null;
        $user = null;
        // Defina a variável do usuário como nula por padrão

        if (auth()->check()) {
            $user = auth()->user();
            $userName = $user->name;
            $perfil = $user->perfil; // Substitua 'profile_image' pelo nome da coluna da imagem no banco de dados
        }

        // Outras operações ou lógica necessária para essa página

        return view('edit_profile', compact('userName', 'user', 'perfil'));
    }

    public function checkPerfil($id)
    {
        // Encontra o usuário com o id fornecido
        $user = User::find($id);

        if ($user) {
            // Verificar se há um perfil associado a esse usuário
            $perfil = Perfil::where('user_id', $id)->first();
            if ($perfil) {
                // Se existir um perfil, redirecione para a view de edição do perfil
                return redirect()->route('atualizar-perfil', ['id' => $id]);
            } else {
                // Se não existir um perfil, redirecione para a view de adicionar perfil
                return redirect()->route('adicionar-perfil', ['id' => $id]);
            }
        }
    }

    public function showupdate($id)
    {
        $user = User::with('enderecos')->find($id);
        $userName = $user->name;

        // Recupera os dados do perfil
        $perfil = Perfil::where('user_id', $id)->first();

        // Recupera TODOS os endereços associados a esse usuário
        $enderecos = Endereco::where('user_id', $id)->get();

        return view('edit_profile', compact('perfil', 'user', 'userName', 'enderecos'));
    }

    public function showupdateEnd($enderecoId, $id)
    {

        $user = User::find($id);
        $userName = $user->name;
        $perfil = null;

        $endereco = Endereco::find($enderecoId);


        return view('edit_endereco', compact('perfil', 'user', 'userName', 'endereco'));
    }

    public function showstore($id)
    {

        $user = User::find($id);
        $userName = $user->name;
        $perfil = $user->perfil;
        // Aqui você pode recuperar os dados do perfil e passá-los para a view de edição

        return view('add_profile', compact('user', 'userName', 'perfil'));
    }

    public function showstoreEnd($id)
    {

        $user = User::find($id);
        $userName = $user->name;
        $perfil = $user->perfil;
        // Aqui você pode recuperar os dados do perfil e passá-los para a view de edição
        $endereco = new Endereco();

        return view('add_endereco', compact('user', 'userName', 'perfil', 'endereco'));
    }

    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $perfil = new Perfil();

        // Demais campos do perfil
        $perfil->cpf = $request->input('cpf');
        $perfil->celular = $request->input('celular');
        $perfil->cep = $request->input('cep');
        $perfil->nasc = $request->input('nasc');
        $perfil->user_id = $user->id;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImagem = $request->imagem;

            $extension = $requestImagem->extension();
            $imagemName = md5($requestImagem->getClientOriginalName() . strtotime('now') . "." . $extension);
            $requestImagem->move(public_path("img/profile"), $imagemName);
            $perfil->imagem = $imagemName;
        }

        // Salvar o perfil
        $perfil->save();

        // Redirecionar ou retornar uma resposta
        return redirect()->route('atualizar-perfil', ['id' => $id])->with('success', 'Perfil atualizado com sucesso'); // Redirecionar para outra página após a criação do perfil
    }


    public function storeEnd(Request $request, $id)
    {
        $user = User::find($id);
        $endereco = new Endereco();

        // Demais campos do endereco
        $endereco->rua = $request->input('rua');
        $endereco->numero = $request->input('numero');
        $endereco->bairro = $request->input('bairro');
        $endereco->cidade = $request->input('cidade');
        $endereco->estado = $request->input('estado');
        $endereco->CEP = $request->input('CEP');
        $endereco->endTipo = $request->input('endTipo');
        $endereco->endPadrao = $request->input('endPadrao');


        // Salvar o perfil
        $user->enderecos()->save($endereco);

        // Redirecionar ou retornar uma resposta
        return redirect()->route('atualizar-perfil', ['id' => $id])->with('msg', 'Endereço adicionado com sucesso'); // Redirecionar para outra página após a criação do perfil
    }

    public function update(Request $request, $id)
    {
        $perfil = Perfil::where('user_id', $id)->first();
        // Atualize os dados do perfil com base nos dados recebidos do formulário
        $perfil->celular = $request->input('celular');
        $perfil->cep = $request->input('cep');

        // Salve as alterações
        $perfil->save();

        // Redirecione para alguma página após a atualização
        return redirect()->route('atualizar-perfil', ['id' => $id])->with('success', 'Perfil atualizado com sucesso');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $perfil = $user->perfil;

            if ($perfil) {
                $perfil->delete(); // Exclui o perfil associado

                $user->delete(); // Em seguida, exclui o usuário
            } else {
                $user->delete(); // Se não houver perfil associado, exclui apenas o usuário
            }
        }
        Auth::logout(); // Faz o logout do usuário
        return redirect()->route('home')->with('success', 'Conta excluída com sucesso');
    }

    public function updateEnd(Request $request, $enderecoId, $id)
    {
        $endereco = Endereco::find($enderecoId);
        $user = User::find($id);

        $endereco->rua = $request->input('rua') ?? $endereco->rua;
        $endereco->numero = $request->input('numero') ?? $endereco->numero;
        $endereco->bairro = $request->input('bairro') ?? $endereco->bairro;
        $endereco->cidade = $request->input('cidade') ?? $endereco->cidade;
        $endereco->CEP = $request->input('CEP') ?? $endereco->CEP;
        $endereco->estado = $request->input('estado') ?? $endereco->estado;
        $endereco->endTipo = $request->input('endTipo') ?? $endereco->endTipo;
        $endereco->endPadrao = $request->input('endPadrao') ?? $endereco->endPadrao;

        $endereco->save();
        return redirect()->route('atualizar-perfil', ['id' => $user->id])->with('msg', 'Endereço atualizado com sucesso');
    }

    public function destroyEnd(Request $request,$enderecoId,$id){
        $endereco = Endereco::find($enderecoId);
        $user = User::find($id);

        $endereco->delete();

        return redirect()->route('atualizar-perfil', ['id' => $user->id])->with('msg','Endereço apagado com sucesso');
    }
}

