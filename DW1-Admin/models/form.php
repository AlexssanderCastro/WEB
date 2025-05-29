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

  </style>

</head>

<body>

  <?php include "../includes/barra-superior.php"; ?>
  
  <div class="container">
    <div class="row">
      <?php include "../includes/menu-lateral.php"; ?>

      <div class="col-9">
        <h3 class="mt-3">Adicionar - Formulário</h3>
        <form action="#" method="post">
          <div class="row">

            <!-- <div class="mb-3">
              <label for="id-nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="id-nome" placeholder="João da Silva" name="campo-nome"
                value="Fulano" required minlength="6" maxlength="10" disabled alt="Informe seu nome completo" title="Informe seu nome completo">
            </div> -->
            <div class="col-lg-6 mb-3">
              <label for="id-nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="id-nome" name="campo-nome" value="" required>
            </div>
            <div class="col-lg-6 mb-3">
              <label for="id-email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="id-email" name="campo-email" value="" required>
            </div>
            <div class="col-lg-4 mb-3">
              <label for="id-cpf" class="form-label">CPF:</label>
              <input type="text" class="form-control" id="id-cpf" name="campo-cpf" value="" maxlength="11"
                placeholder="000.000.000-00" required>
            </div>
            <div class="col-lg-4 mb-3">
              <label for="id-rg" class="form-label">RG:</label>
              <input type="text" class="form-control" id="id-rg" name="campo-rg" value="" required>
            </div>
            <div class="col-lg-4 mb-3">
              <label for="id-data" class="form-label">Data de nascimento:</label>
              <input type="date" class="form-control" id="id-data" name="campo-data" value="" required>
            </div>
            <div class="col-lg-4 mb-3">
              <label for="id-sexo">Sexo</label>
              <select name="campo-sexo" class="form-control" id="id-sexo" require>
                <option value="">Selecione o sexo</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
            <div class="col-lg-4 mb-3">
              <label class="form-label" for="">Gosto musical</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Forró" id="check-1" name="campo-musical">
                <label class="form-check-label" for="check-1">
                  Forró
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Heavy Metal" id="check-2" name="campo-musical">
                <label class="form-check-label" for="check-2">
                  Heavy Metal
                </label>
              </div>
            </div>
            <div class="col-lg-4 mb-3">
              <label class="form-label" for="">Cor:</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="campo-cor" id="raio-1" value="Azul" checked>
                <label class="form-check-label" for="raio-1">
                  Azul
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="campo-cor" id="radio-2"  value="Verde">
                <label class="form-check-label" for="radio-2">
                  Verde
                </label>
              </div>
            </div>
            <div class="mb-3 col-lg-6">
              <label for="id-obs" class="form-label">Observação:</label>
              <textarea class="form-control" id="id-obs" rows="3" name="campo-obs"></textarea>
            </div>

            <div class="col-12">
              <button class="btn btn-success" type="submit">Enviar</button>
            </div>

          </div>
        </form>
      </div>

    </div>

  </div>
  </div>

  <?php include "../includes/rodape.php"; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))</script>
</body>

</html>