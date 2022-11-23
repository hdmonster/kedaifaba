<div class="navbar-area navbar-style-two">
  <div class="zovio-responsive-nav">
    <div class="container">
      <div class="zovio-responsive-menu">
        <div class="logo">
          <a href="/">
            <img src="/site/img/kedaifaba/logo-no-text.png" width="30px" alt="logo">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="zovio-nav">
    <nav class="navbar navbar-expand-md navbar-light">
      <a class="navbar-brand" href="/">
        <img src="/site/img/kedaifaba/logo-no-text.png" width="50px" alt="logo">
      </a>

      <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="/" class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
          <li class="nav-item"><a href="/product" class="nav-link {{ Route::currentRouteName() == 'product.index' ? 'active' : '' }}">Produk</a></li>
          <li class="nav-item"><a href="/about" class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">Tentang kami</a></li>
        </ul>

        <div class="others-options">
          <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
