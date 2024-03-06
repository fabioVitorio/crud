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
          <button class="btn btn-outline-success" type="submit" onclick="window.location='../cadastrar/index.php'">Cadastrar</button>
        </div>
      </nav>

      <div class="mt-5 mb-5">
        <h3 class="text-center">LISTA DE CLIENTES</h3>
      </div>

      <div style="overflow-y: scroll;">
        <table class="table table-striped">
          <thead class="border-b border-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Sobrenome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Data Nasc.</th>
              <th scope="col">Endereço</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>João Lucas</td>
              <td>Costa</td>
              <td>joão@gmail.com.br</td>
              <td>28/02/2003</td>
              <td>Rua Serafim José da Costa - MG</td>
              <td>  
                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>João Lucas</td>
              <td>Costa</td>
              <td>joão@gmail.com.br</td>
              <td>28/02/2003</td>
              <td>Rua Serafim José da Costa - MG</td>
              <td>  
                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td>João Lucas</td>
              <td>Costa</td>
              <td>joão@gmail.com.br</td>
              <td>28/02/2003</td>
              <td>Rua Serafim José da Costa - MG</td>
              <td>  
                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            
          </tbody>
        </table>    
      </div> 
        
      <script src="script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>