<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>App</title>
    </head>
    <body>

      <!-- nav -->
      <nav class="navbar bg-dark border-bottom border-body">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://codebuilding.com/wp-content/uploads/2023/06/CODE-LOGO-HERO.png" alt="Logo" width="110" height="35" class="d-inline-block align-text-top">
          </a>
          <h3 class="text-center text-light">LISTA DE DESENVOLVEDORES</h3>
          <button class="btn btn-outline-secondary" type="submit" onclick="window.location='../cadastrar/index.php'">Cadastrar</button>
        </div>
      </nav>

      <table class="table table-striped mt-5 px-5">
        <thead class="border-b border-secondary">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">GitHub</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td>João Lucas</td>
            <td>Costa</td>
            <td>joão@gmail.com.br</td>
            <td>joão@gmail.com.br</td>
            <td>
              <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .75rem;">
                Ativo
              </button>
            </td>
            <td>  
              <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
              <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          
        </tbody>
      </table>     
        
      <script src="script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>