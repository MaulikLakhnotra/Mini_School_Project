<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="<?= base_url('css/a.png')?>" style="height:50px; width:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('index.php/user/main') ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <a href="<?= base_url('loggedout') ?>"><button class="btn btn-danger">Log Out</button></a>
  </div>
</nav>
    <h2>HELLO ADMIN, WELCOME TO YOUR HOME PAGE</h2>
        <div class="row">
            <div class="col-sm-5">
                   <div class="container">
                    <div class="jumbotron bg1">
                        <h1 class="display-3">STUDENT DATABASE</h1>
                        <p class="lead">ALL STUDENTS OF ABC SCHOOL REGISTERED ON OUR WEBSITE WILL SHOW HERE.</p>
                        <hr class="my-4">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="<?= base_url('index.php/user/sort') ?>" role="button">CHECK NOW</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="container">    
                    <div class="jumbotron bg2">
                        <h1 class="display-3">ADMISSION REQUEST</h1>
                        <p class="lead">CHECK ALL ADMISSION REQUESTS DONE BY WEBSITE HERE.</p>
                        <hr class="my-4">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="<?= base_url('index.php/admin/admission') ?>" role="button">CHECK NOW</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>