<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
    <title>Project24</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/image/logo.ico'); ?>">
</head>
<body>

<header class="py-3 mb-4 rounded" style="background-color:  #yourBackgroundColor;">
        <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Offcanvas navbar large" style="background-color:  #yourBackgroundColor;">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Left Block: Empty for margin -->
            <div class="col-4"><a href="<?= base_url('home'); ?>"><img rel="icon" type="image/x-icon" src="<?= base_url('assets/image/logo.png'); ?>" alt="icon" class="me-2" style="height: 100px; width: 100px;"></a></div>
            
            <!-- Middle Block: Logo -->
            <div class="col-4 text-center">
            <form action="<?= base_url('search') ?>" method="get">
              <div class="input-group mb-3">
                <input type="text" id="form1" name="query" class="form-control" placeholder="Search..." aria-label="Search" />
                <button class="btn btn-outline-secondary bg-success text-white" type="submit" id="button-addon2" >Search</button>
              </div>
            </form>

            </div>
            
            <!-- Right Block: Navbar Toggler and Offcanvas Menu -->
            <div class="col-4 d-flex justify-content-end">
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <!-- Offcanvas Menu -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label" style="background-color: rgb(190, 25, 58);">
                <div class="offcanvas-header">
                  <h1 class="mb-0 offcanvas-title"><?= esc($title) ?></h1>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link fs-5 bold" aria-current="page" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fs-5 bold" aria-current="page" href="<?= base_url('media'); ?>">Top movies</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fs-5 bold" aria-current="page" href="<?= base_url('show'); ?>">Top shows</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
<h1 class="mb-0"><?= esc($title) ?></h1>
<hr>

