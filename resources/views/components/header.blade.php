<nav class="navbar navbar-expand-lg navbar-light bg-redr">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/supplier" class=" text-black nav-link  @if($active=='supplier') active @endif">
            Supplier
          </li>
        </li> <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Storage</a>
        </li>
          </li> <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Assets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Distribution</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Transportation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Deliveries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Returns</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Supplier</a></li>
              <li><a class="dropdown-item" href="#">Storgage</a></li>
                <li><a class="dropdown-item" href="#">Assets</a></li>
                <li><a class="dropdown-item" href="#">Distribution</a></li>
                <li><a class="dropdown-item" href="#">Transportation</a></li>
                <li><a class="dropdown-item" href="#">Deliveries</a></li>
                <li><a class="dropdown-item" href="#">Returns</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>