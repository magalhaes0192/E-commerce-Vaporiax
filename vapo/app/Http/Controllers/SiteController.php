<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Perfil;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
         // Defina a variável de imagem como nula por padrão
         $userName = null;
         $user = null;
         $perfil = null;
    if (auth()->check()) {
        $user = auth()->user();
        $userName = $user->name;
        $perfil = $user->perfil;
    }
    
        $produtos = Produto::all();
        $produtoNovo = Produto::where('novoProduto', true)->paginate(4);
        $novosProdutos = Produto::where('recemProduto', true)->get();
        $destaqueProdutos = Produto::where('destaque', true)->get();
        $bemAvaliado = Produto::where('bemAvaliado', true)->get();
        $promocaoDia = Produto::where('promocaoDia', true)->get();

        return view('welcome' , compact('novosProdutos','destaqueProdutos', 'bemAvaliado', 'promocaoDia', 'produtos','produtoNovo', 'userName', 'user', 'perfil'));
    }

    public function details($slug){
        $produto = Produto::where('slug', $slug)->first();
        $produtosRelacionados = Produto::where('marca', $produto->marca)->orWhere('sabor', $produto->sabor)->where('slug', '!=', $slug)  ->take(5)
        ->take(4)->get();

        return view('detail', compact('produto', 'produtosRelacionados'));
    }

    public function editarPerfil($id){

        $user = User::find($id);

        if (auth()->check()) {
            $user = auth()->user();
            $perfil = $user->perfil;
            $userName = $user->name;
            $userImage = $user->perfil_image; // Substitua 'profile_image' pelo nome da coluna da imagem no banco de dados
        }else{
            $userName = null; // Defina a variável como nula por padrão
            $userImage = null;
        }

        return view('edit_profile', compact('userName','userImage', 'user', 'perfil'));
    }
}
