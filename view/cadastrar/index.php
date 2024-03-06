<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>App</title>
    </head>
    <body>

      <!-- nav -->
      <nav class="navbar bg-dark border-bottom border-body">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://codebuilding.com/wp-content/uploads/2023/06/CODE-LOGO-HERO.png" alt="Logo" width="110" height="35" class="d-inline-block align-text-top">
          </a>
            <button class="btn btn-outline-success" type="submit" onclick="window.location='../listar/index.php'">Listar</button>
        </div>
      </nav>

      <!-- main -->
      <div style="margin-top: 30px;">
        <h3 class="text-center">CADASTRO DE CLIENTES</h3>
      </div>
        
      <div style="padding: 20px 0 20px 0;">
        <form class="row g-3 m-auto needs-validation" style="border-radius: 3px; padding: 30px; max-width: 70%;" novalidate>
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nome</label>
            <input type="text" class="form-control border border-secondary" id="nome" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Sobrenome</label>
            <input type="text" class="form-control border border-secondary" id="sobrenome" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" class="form-control border border-secondary" id="mail" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>
          <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control border border-secondary" id="endereco" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Enedreço</label>
            <input type="text" class="form-control border border-secondary" id="endereco" required>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select class="form-select border border-secondary" id="estado" required>
              <option selected disabled value="">Escolha...</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
              <option value="EX">Estrangeiro</option>
            </select>
          </div>

          <div class="mt-5 col-12">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
          </div>
        </form>
      </div>
      <script src="script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>