<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="/" class="logo">
                <div class="img-wrap">
                    <img src="{{ asset('assets/img/page/logo-light.png') }}" alt="Amazonia" width="160">
                    <img src="{{ asset('assets/img/page/logo.png') }}" alt="Amazonia" width="160" class="logo-colored">
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-menu-icon') }}"></use></svg>
            </a>

            <div class="nav nav-pills nav1 header-menu expanded-menu">
                <div class="mCustomScrollbar">
                    <ul>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Quienes somos</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/nosotros">Nosotros</a>
                                <a class="dropdown-item" href="/sig">SIG</a>
                                <a class="dropdown-item" href="/parque-automotor">Parque Automotor</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/servicios" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#modal-cotizacion" class="nav-link">Cotizar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contacto" class="nav-link">Contactenos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>App</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://sive.amazoniacl.com">Sive</a>
                                <a class="dropdown-item" href="https://admin.amazoniacl.com">Administrador</a>
                            </div>
                        </li>
                        <li class="close-responsive-menu js-close-responsive-menu">
                            <svg class="olymp-close-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-close-icon') }}"></use></svg>
                        </li>
                        <li class="shoping-cart more">
                            <a href="#" data-toggle="modal" data-target="#registration-login-form-popup" class="nav-link">
                                <svg class="olymp-happy-face-icon"><use xlink:href="{{ asset('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon') }}"></use></svg>
                            </a>
                            <div class="more-dropdown shop-popup-cart">
                                <ul class="notification-list">
                                    <li>
                                        <div class="author-thumb">
                                            <img src="@if (auth()->user() && auth()->user()->avatar) {{ auth()->user()->avatar }} @else assets/img/page/favicon.png @endif" width="32" alt="Icon">
                                        </div>
                                        <div class="notification-event">
                                            <div>Bienvenido, {{ auth()->user() ? auth()->user()->name : 'por favor inicie sesión' }}</div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="cart-btn-wrap">
                                    @auth
                                        <a href="/dashboard" class="btn btn-primary btn-sm">Ir a mi perfil</a>

                                        <a href="{{ route('logout') }}" class="btn bg-google btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endauth

                                    @guest
                                        <a href="#" data-toggle="modal" data-target="#registration-login-form-popup" class="btn btn-primary btn-sm">Iniciar sesión o registrarse</a>
                                    @endguest
                                    
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>