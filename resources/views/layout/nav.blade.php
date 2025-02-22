<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logotipo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('storage/nav/logotipo.png') }}" alt="Logotipo BGCInformatica">
            </a>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Equipamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marcas e Modelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reparações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orçamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Encomendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dívidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Técnicos</a>
                    </li>

                    <!-- logout -->
                    <li class="nav-item">
                        <a>
                            <form action="{{ route('tecnico.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link" style="border: none; background: none;">Logout</button>
                            </form>
                        </a>
                    </li>
                    <!-- /logout -->
                </ul>
            </div>
        </div>
    </nav>
</header>