<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project24</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/image/logo.ico'); ?>">
</head>
<body>

<div class="full-page" style="background-image: url('<?= base_url('assets/image/home_background.jpg'); ?>'); background-size: cover; background-position: center; opacity: 0.1;"></div>
<header class="py-3 mb-4 rounded " style="background-color:  #yourBackgroundColor;">

<h1 >Project24</h1>
    </header>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6 col-lg-4">
                <img rel="icon" type="image/x-icon" src="<?= base_url('assets/image/logo.png'); ?>" alt="icon" class="img-fluid me-2" style="max-width: 300px;">
                <div class="search-box py-5">
                    <form action="<?= site_url('search') ?>" method="GET" class="search-box py-5">
                        <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                        <input type="text" name="query" class="input-search" placeholder="Type to Search...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4 ">
  <ul class="nav justify-content-center  ">
      <li class="nav-item"><a href="#" class="nav-link px-2 fs-5">Home</a></li>
      <li class="nav-item"><a href="<?= base_url('media'); ?>" class="nav-link px-2 fs-5">Top movies</a></li>
      <li class="nav-item"><a href="<?= base_url('show'); ?>" class="nav-link px-2 fs-5">Top Shows</a></li>
    </ul>
<hr>
    <p class="text-center fs-5">&copy; 2024 Swopnil Sapkota</p>
  </footer>
</div>

<script src="https://kit.fontawesome.com/2363f97efc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

   

