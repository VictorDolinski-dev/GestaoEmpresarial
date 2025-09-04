<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Gestão Empresarial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}"
                       aria-current="{{ request()->routeIs('home') ? 'page' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sobre') ? 'active' : '' }}"
                       href="{{ route('sobre') }}">
                        Sobre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                       href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cadastro') ? 'active' : '' }}"
                       href="{{ route('cadastro') }}">
                        Cadastro
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('produtos.index') ? 'active' : '' }}"
                       href="{{ route('produtos.index') }}">
                        Produtos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('produtos.show') ? 'active' : '' }}"
                       href="{{ route('produtos.show', 1) }}">
                        Produto Detalhe
                    </a>
                </li>

                <!-- Dropdown Admin -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('admin/*') ? 'active' : '' }}"
                       href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                        <li><a class="dropdown-item {{ request()->routeIs('admin.login') ? 'active' : '' }}"
                               href="{{ route('admin.login') }}">
                               Login Admin
                        </a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                               href="{{ route('admin.dashboard') }}">
                               Dashboard
                        </a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('admin.clientes.index') ? 'active' : '' }}"
                               href="{{ route('admin.clientes.index') }}">
                               Clientes
                        </a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('admin.clientes.show') ? 'active' : '' }}"
                               href="{{ route('admin.clientes.show', 1) }}">
                               Cliente Detalhe
                        </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
