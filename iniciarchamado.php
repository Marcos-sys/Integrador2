
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  Chamado de suporte
  </title>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="index.php">
        <img src="assets/img/brand/SUS.png" class="navbar-brand-img" alt="...">
      </a>
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->

       
  <!-- Navigation -->
  <?php
       require 'menu.php'
       ?>

       
      </div>
    </div>
  </nav>
  <div class="main-content">
 
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <h1 class="text-white">Bem-vindo ao suporte</h1>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Utilize os campos abaixo para detalhar mais sobre o problema </h3>
            </div>
            <div class="table-responsive">
              <div class="col-md-10">

                      <div class="form-group col-md-8">
                          <form method="POST" action="phpiniciarchamado.php">
                          <input type="text" class="form-control" id="assunto"  name="assunto" placeholder="Assunto">
                          <br>
                          <textarea class="form-control" id="detalhes" name="descricao" rows="3" placeholder="Descreva o ocorrido..."></textarea>
                          <br>
                          <input type="reset" class="btn btn-warning" value="limpar campos">
                          <input type="submit"  class="btn btn-primary" value="Enviar">
                        </form>
                        </div>
                      
                    
                      <br>
                      <br>
                      <br>
                      </div>
                     
              </div>
            </div>
            <div class="card-footer py-4">
              
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <footer class="footer">
       
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>