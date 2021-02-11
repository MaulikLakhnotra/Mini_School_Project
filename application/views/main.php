<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
     <title>Document</title>
  <style>
  .jumbotron{
    height:600px;
  }
  .bimg{
    background-image: linear-gradient(rgba(0,0,0,1), rgba(0,0,0,0)), url(http://localhost/abcschool/css/a3.jpg);
    background-size:cover;
  }
  .bimg:hover{
    background-image: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,1)), url(http://localhost/abcschool/css/a3.jpg);
  }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= base_url('css/a.png')?>" style="height:50px; width:50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item">
        <a class="nav-link" href="#">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('about'); ?>">About Us</a>
      </li>
        
      </ul>
      <form class="form-inline ml-auto">
        <a href="<?= base_url('login') ?>"><button class="btn btn-secondary my-2 my-sm-0" type="button">ADMIN PAGE</button></a>
        <a href="<?= base_url('student') ?>"><button class="btn btn-secondary my-2 my-sm-0" type="button">STUDENT PAGE</button></a>
    </form>
    </div>
  </div>
</nav>


<div class="jumbotron bimg">
  <h1 class="display-3">ABC SCHOOL</h1>
  <p class="lead">Welcome to our ABC School's main page. You will see some options to chose from. Here you go.</p>
  <hr class="my-4">
  <p>If you want to get admission in our school please click on the button given bellow. Thank you.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?= base_url('admission') ?>" role="button">New Admission</a>
  </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>