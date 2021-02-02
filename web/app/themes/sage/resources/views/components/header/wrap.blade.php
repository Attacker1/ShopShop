<header class="header">
  <div class="container header__inner">
    <button class="header__hamburger">
      <span></span>
    </button>
    <div class="header__left">
      <a href="/" class="header__logo">
        @include('icon::logo')
      </a>
      {!! bem_menu('primary_navigation') !!}
    </div>
    <div class="header__icons">
      <button class="header__icon header__search">
        @include('icon::search')
      </button>
      <a href="#" class="header__icon header__wishlist">
        @include('icon::heart')
      </a>
      <div class="header__icon header__user">
        @include('icon::user')
      </div>
      <a href="#" class="header__icon header__checkout">
        @include('icon::cart')
        <span class="header__checkout-count">0</span>
      </a>
    </div>
  </div>
</header>
