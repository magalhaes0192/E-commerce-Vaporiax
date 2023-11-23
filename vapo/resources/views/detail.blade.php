@extends('layout')
@section('title','home')
@section('conteudo')

@component('components.mainHome.banner')
@endcomponent

@component('components.mainHome.produtoAbre')
@endcomponent

@component('components.mainHome.sidebar')
@endcomponent

<div class="product-featured">

    <h2 class="title">Detalhes do produto</h2>

    <div class="showcase-wrapper has-scrollbar">

      <div class="showcase-container">

        <div class="showcase">
          <div class="showcase-banner promocao">
            <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="showcase-img">
          </div>

          <div class="showcase-content">
            
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <a href="#">
              <h3 class="showcase-title">{{ $produto->nome }}</h3>
            </a>

            <p class="showcase-desc">
                {{ $produto->descricao }}
            </p>

            <p class="price" style="text-transform: uppercase; color: var(--eerie-black);">
                {{$produto->marca}} {{$produto->sabor}}
            </p>

            <div class="price-box">
              <p class="price">R${{ $produto->preco }}</p>

              <del>R${{ $produto->promocao }}</del>
            </div>

            <button class="add-cart-btn">Adicionar ao carrinho</button>

            <div class="showcase-status">
              <div class="wrapper">
                <p>
                  already sold: <b>20</b>
                </p>

                <p>
                  Disponível: <b>{{ $produto->estoque }}</b>
                </p>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="detail-slider">
        <div class="product-main">

            <h2 class="title">Produtos Relacionados</h2>

              <div class="showcase">
                
                <section class="layout">
                  @foreach($produtosRelacionados as $produto)
                    <div class="product-card">
                      <a href="">
                        <div class="card-img">
                          <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                          <div class="showcase-actions">
                            <button class="btn-action">
                              <ion-icon name="heart-outline"></ion-icon>
                            </button>
                            <button class="btn-action">
                              <ion-icon name="eye-outline"></ion-icon>
                            </button>
                            <button class="btn-action">
                              <ion-icon name="cart-outline"></ion-icon>
                            </button>
                          </div>
                        </div>
                        <div class="card-content">
                          <a href="#" class="card-marca">{{ $produto->marca }}</a>
                          <h3 class="card-title">
                            {{ $produto->marca }} {{ $produto->sabor }} {{ $produto->puffs }} Puffs
                          </h3>
                          <div class="card-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                          </div>
                          <div class="card-price">
                            <p class="price">R${{ $produto->preco }}</p>
                            <del>R${{ $produto->promocao }}</del>
                          </div>
                        </div>
                      </a>
                    </div>
                  @endforeach
                </section>
              </div>
          </div>
    </div>

</div>


@endsection