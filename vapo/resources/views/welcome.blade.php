@extends('layout')
@section('title','home')
@section('conteudo')

@component('components.mainHome.banner')
@endcomponent

@component('components.mainHome.produtoAbre')
@endcomponent

@component('components.mainHome.sidebar')
@endcomponent

<div class="product-minimal">
  <div class="product-showcase">
      <h2 class="title">Recém-Chegados</h2>
      <div class="showcase-wrapper">
          @foreach ($novosProdutos->take(5) as $produto)
          <div class="showcase-container">
              <div class="showcase">
                  <a href="{{route('detalhes', $produto->slug)}}" class="showcase-img-box">
                      <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" width="70" class="showcase-img">
                  </a>
                  <div class="showcase-content">
                      <a href="{{route('detalhes', $produto->slug)}}">
                          <h4 class="showcase-title">{{ $produto->nome }}</h4>
                      </a>
                      <a href="{{route('detalhes', $produto->slug)}}" class="showcase-category">{{ $produto->categoria }}</a>
                      <div class="price-box">
                          <p class="price">R${{ $produto->preco }}</p>
                          <del>R${{ $produto->promocao }}</del>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  <div class="product-showcase">
    <h2 class="title">Do momento</h2>
    <div class="showcase-wrapper">
        @foreach ($destaqueProdutos->take(5) as $produto)
        <div class="showcase-container">
            <div class="showcase">
                <a href="{{route('detalhes', $produto->slug)}}" class="showcase-img-box">
                    <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" width="70" class="showcase-img">
                </a>
                <div class="showcase-content">
                    <a href="{{route('detalhes', $produto->slug)}}">
                        <h4 class="showcase-title">{{ $produto->nome }}</h4>
                    </a>
                    <a href="{{route('detalhes', $produto->slug)}}" class="showcase-category">{{ $produto->categoria }}</a>
                    <div class="price-box">
                        <p class="price">R${{ $produto->preco }}</p>
                        <del>R${{ $produto->promocao }}</del>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="product-showcase">
  <h2 class="title">Bem avaliados pelos clientes</h2>
  <div class="showcase-wrapper">
      @foreach ($bemAvaliado->take(5) as $produto)
      <div class="showcase-container">
          <div class="showcase">
              <a href="{{route('detalhes', $produto->slug)}}" class="showcase-img-box">
                  <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" width="70" class="showcase-img">
              </a>
              <div class="showcase-content">
                  <a href="{{route('detalhes', $produto->slug)}}">
                      <h4 class="showcase-title">{{ $produto->nome }}</h4>
                  </a>
                  <a href="{{route('detalhes', $produto->slug)}}" class="showcase-category">{{ $produto->categoria }}</a>
                  <div class="price-box">
                      <p class="price">R${{ $produto->preco }}</p>
                      <del>R${{ $produto->promocao }}</del>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
</div>

<!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Promoção do dia</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  @foreach($promocaoDia as $produto)
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


                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Oferta acaba em:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>
                @break
                @endforeach

              </div>

            </div>

          </div>
          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Produtos novos</h2>

              <div class="showcase">
                
                <section class="layout">
                  @foreach($produtoNovo as $produto)
                    <div class="product-card">
                      <a href="{{route('detalhes', $produto->slug)}}">
                        <div class="card-img">
                          <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                          <div class="showcase-actions">
                            <button class="btn-action">
                              <ion-icon name="heart-outline"></ion-icon>
                            </button>
                            <button class="btn-action">
                              <ion-icon name="eye-outline"><a href="{{route('detalhes', $produto->slug)}}"></a></ion-icon>
                            </button>
                            <button class="btn-action">
                              <ion-icon name="cart-outline"></ion-icon>
                            </button>
                          </div>
                        </div>
                        <div class="card-content">
                          <a href="{{route('detalhes', $produto->slug)}}">
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
                        </a>
                        </div>
                      </a>
                    </div>
                  @endforeach
                </section>

              </div>
              <div class="demo">
                <nav class="pagination-outer" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="{{ $produtoNovo->previousPageUrl() }}" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $produtoNovo->lastPage(); $i++)
                            <li class="page-item{{ $i === $produtoNovo->currentPage() ? ' active' : '' }}">
                                <a class="page-link" href="{{ $produtoNovo->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item">
                            <a href="{{ $produtoNovo->nextPageUrl() }}" class="page-link" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

          </div>

        </div>

      </div>

    </div>


@endsection