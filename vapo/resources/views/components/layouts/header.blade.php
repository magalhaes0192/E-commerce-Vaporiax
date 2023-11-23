<header>

    <div class="header-main">
    
      <div class="container">
    
        <a href="/" class="header-logo">
          <img src="{{asset ('img/logo/LogoVapo.png')}}" alt="Anon's logo" width="150" height="60">
        </a>
    
        <div class="header-search-container">
    
          <input type="search" name="search" class="search-field" placeholder="Pesquise pelo produto...">
    
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
    
        </div>
    
        <div class="header-user-actions">
    
          @auth
          <button class="action-btn register" id="fechar-modal" onclick="abrirMenu()">
            @if ($perfil && $perfil->imagem)
            <img src="img/profile/{{ $perfil->imagem }}" alt="{{ $userName }}" id="user" style="width: 70px;
            height: 70px;
            border-radius: 50%;">
          @else
          <ion-icon name="image" id="user" style="font-size: 50px; color: var(--white); "></ion-icon>
          @endif
          </button>
          <div class="janela-menu" id="janela-menu">
            <div class="dropdown-menu">
                <div class="fechar-menu">
                    <i class="bi bi-x" id="fechar-menu"></i>
                </div>
                <div class="nome_foto">
                  @if ($perfil && $perfil->imagem)
                    <img src="img/profile/{{ $perfil->imagem }}" alt="{{ $userName }}" id="user">
                  @else
                  <ion-icon name="image" id="user" style="font-size: 50px; color: var(--green-vapo); "></ion-icon>
                  @endif
                    <h2>
                      {{$userName}}
                    </h2>
                </div>
                <div class="linha">
                    <hr>
                </div>
                <div class="funcoes">
                    <div class="icon">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <div class="text">
                             <a href="{{ route('verificar-perfil', ['id' => $user->id]) }}" style="color: #212121;">Editar Perfil</a>
                             <a href="{{ route('verificar-perfil', ['id' => $user->id]) }}"><i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="funcoes">
                    <div class="icon">
                        <i class="bi bi-bell-fill"></i>
                    </div>
                    <div class="text">
                        <a href="#">
                            <h2>Notificações</h2>
                        </a>
                        <a href="#">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="funcoes">
                    <div class="icon">
                        <i class="bi bi-box-arrow-left"></i>
                    </div>
                    <div class="text">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <h2>Logout</h2>
                        </a>
                        </form>
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          @endauth
          @guest
          <button class="action-btn register" id="fechar-modal" onclick="abrirModal()">
            <a href="/login"><ion-icon name="person-outline" style="color: var(--spanish-gray);"></ion-icon></a>
          </button>
          @endguest
         

    
          <button class="action-btn">
            <ion-icon name="heart-outline" style="color: var(--white);"></ion-icon>
            <span class="count">0</span>
          </button>
    
          <button class="action-btn" >
            <ion-icon name="bag-handle-outline" style="color: var(--white);"></ion-icon>
            <span class="count">0</span>
          </button>
    
        </div>
    
      </div>
    
    </div>
    
    
    <div class="mobile-bottom-navigation">
    
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
    
      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
    
        <span class="count">0</span>
      </button>
    
      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>
    
      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
    
        <span class="count">0</span>
      </button>
    
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
    
    </div>
    
    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
    
      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>
    
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>
    
      <ul class="mobile-menu-category-list">
    
        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>
    
        <li class="menu-category">
    
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>
    
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
    
          <ul class="submenu-category-list" data-accordion>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>
    
          </ul>
    
        </li>
    
        <li class="menu-category">
    
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>
    
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
    
          <ul class="submenu-category-list" data-accordion>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>
    
          </ul>
    
        </li>
    
        <li class="menu-category">
    
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>
    
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
    
          <ul class="submenu-category-list" data-accordion>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>
    
          </ul>
    
        </li>
    
        <li class="menu-category">
    
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>
    
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>
    
          <ul class="submenu-category-list" data-accordion>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>
    
            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>
    
          </ul>
    
        </li>
    
        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>
    
        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>
    
      </ul>
    
      <div class="menu-bottom">
    
        <ul class="menu-category-list">
    
          <li class="menu-category">
    
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>
    
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>
    
            <ul class="submenu-category-list" data-accordion>
    
              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>
    
              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>
    
              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>
    
            </ul>
    
          </li>
    
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>
    
            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>
    
              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>
    
        </ul>
    
        <ul class="menu-social-container">
    
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
    
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
    
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
    
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
    
        </ul>
    
      </div>
    
    </nav>
    
    </header>