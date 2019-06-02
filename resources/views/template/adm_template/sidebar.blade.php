<nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="{{route('adm.index')}}">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(atual)</span>
              </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{route('projetos.index')}}">
                <span data-feather="file"></span>
                Projetos
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Carousel
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Equipe
                  </a>
                </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Produtos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Clientes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Relatórios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Carousel
              </a>
            </li> --}}
          </ul>

          {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Relatórios salvos</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Neste mês
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Último trimestre
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Engajamento social
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Vendas do final de ano
              </a>
            </li> --}}
          </ul>
        </div>
      </nav>