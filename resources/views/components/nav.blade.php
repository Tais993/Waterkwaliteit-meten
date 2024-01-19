<nav id="nav">
    <div class="nav-logo">
        <a href="/">
            <img src="{{ url('images/5.png') }}"> AQUALITY
        </a>
    </div>
    <div class="right">
        <a href="/store">STORE</a>
        <a href="/about">ABOUT</a>
        <a href="/contact">CONTACT</a>
        @if(auth()->user() && auth()->user()->isAdmin())
            <a href="{{ route('admin.dashboard') }}">ADMIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
        @elseif(!auth()->user())
            <a href="/login">LOG IN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
            @else
            <a href="/login">DASHBOARD <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
        @endif

    </div>
    <i id="mobile-menu" class="fa-solid fa-bars nav-icon" style="color: #ffffff;"></i>
</nav>

<div id="nav-modal" class="nav-modal">
    <div class="nav-modal-content">
      <div class="nav-modal-close"><span class="nav-close">&times;</span></div>
      <div class="nav-modal-links">
        <a href="/">HOME</a>
        <a href="/store">STORE</a>
        <a href="/about">ABOUT</a>
        <a href="/contact">CONTACT</a>
        @if(auth()->user() && auth()->user()->isAdmin())
            <a href="{{ route('admin.dashboard') }}">ADMIN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
        @elseif(!auth()->user())
            <a href="/login">LOG IN <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
        @else
            <a href="/login">DASHBOARD <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></a>
        @endif
      </div>
    </div>
  </div>
