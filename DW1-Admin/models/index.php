<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    .container {
      background-color: lightgray;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="nav-flex-column">
          <div dir="auto" align="initial" data-region="text-container">
            <ul class="nav flex-column mt-3">
              <li class="nav-item"><a class="nav-link active" href="#" target="_blank" rel="noreferrer">Active</a></li>
              <li class="nav-item"><a class="nav-link" href="#" target="_blank" rel="noreferrer">Link</a></li>
              <li class="nav-item"><a class="nav-link" href="#" target="_blank" rel="noreferrer">Link</a></li>
              <li class="nav-item"><a class="nav-link disabled" target="_blank" rel="noreferrer">Disabled</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-9">
        <h3>Listagem de registros</h3>
        <button type="button" class="btn btn-success"><i class="bi bi-plus-lg"></i> Adicionar </button>

        <table class="table table-hover mt-3" >
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col" class="text-center">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td class="text-center">
                <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Editar"><i class="bi bi-pencil-square"></i></a>
                <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Excluir"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td class="text-center">
                <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Editar"><i class="bi bi-pencil-square"></i></a>
                <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Excluir"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>John</td>
              <td>Doe</td>
              <td class="text-center">
                <a href="#" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Editar"><i class="bi bi-pencil-square"></i></a>
                <a href="#" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Excluir"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <footer>
    <div class="container-fluid">
      Rodapé
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>
</body>

</html>