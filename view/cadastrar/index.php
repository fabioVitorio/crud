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
          <h3 class="text-center text-light">CADASTRO DE DESENVOLVEDORES</h3>
          <button class="btn btn-outline-secondary" type="submit" onclick="window.location='../listar/index.php'">Listar</button>
        </div>
      </nav>

      <!-- main -->
      <div style="padding: 20px 0 20px 0; max-width: 70%; margin: 0 auto">
        <form class="row justify-content-center g-3 m-auto needs-validation" style="padding: 30px; " novalidate>
          <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">Nome</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
              </span>
              <input type="text" class="form-control" id="nome" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>

          <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">CPF</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
              </svg>
              </span>
              <input type="text" class="form-control" id="cpf" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>

          <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                  <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                  <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>
              </span>
              <input type="email" class="form-control" id="mail" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>

          <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">GitHub</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                </svg>
              </span>
              <input type="text" class="form-control" id="github" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>

          <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Data Nascimento</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                  <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                </svg>
              </span>
              <input type="date" class="form-control" id="data_nasc" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>

          <div class="col-md-2">
            <label for="validationCustom04" class="form-label">Função</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
                  <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z"/>
                  <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z"/>
                </svg>
              </span>
              <select class="form-select" id="estado" required>
                <option selected disabled value="">Escolha...</option>
                <option value="fullstack">FullStack</option>
                <option value="backend">BackEnd</option>
                <option value="frontend">FrontEnd</option>
              </select>
            </div> 
          </div>  

          <div class="col-md-5">
            <label for="validationCustom03" class="form-label">Observações</label>
            <textarea class="form-control" name="" id="endereco" rows="3" style="resize: none;" maxlength="250" required></textarea>
          </div>

          <button class="btn btn-success col-md-10 mt-5" type="submit" id="liveToastBtn">Cadastrar</button>
          
        </form>
      </div>

      
      <!-- toast -->
      <!-- <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill text-primary" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
            </svg>
            <strong class="me-auto">Concluído</strong>
            <small>concluído</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Cadastro realizado com sucesso.
          </div>
        </div>
      </div> -->

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="script.js"></script>
    </body>
</html>