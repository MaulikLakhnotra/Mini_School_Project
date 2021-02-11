<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
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
        <a class="nav-link" href="<?= base_url('main') ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>
<h2>WELCOME STUDENT PLEASE SUBMIT YOUR DATA.</h2>
<div class="container">
    <form action="<?= base_url('index.php/user/create')?>" method="post">
        <div class="form-group">
            <label>Roll Number</label>
            <input type="text" class="form-control" id="roll_num" name="roll_num" placeholder="Enter Your Roll Number">
            <span style="color:red;"><?= form_error('roll_num') ?></span>
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
            <span style="color:red;"><?= form_error('name') ?></span>
            <label>Address</label>
            <input type="text" class="form-control" id="adr" name="adr" placeholder="Enter Your Address/Area">
            <span style="color:red;"><?= form_error('adr') ?></span>
            <label>City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your city">
            <span style="color:red;"><?= form_error('city') ?></span>
            <label>Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Your contact Number">
            <span style="color:red;"><?= form_error('contact') ?></span>
            <label>Standard</label>
            <input type="text" class="form-control" id="std" name="std" placeholder="Enter Your Standard">
            <span style="color:red;"><?= form_error('std') ?></span>
            <button type="submit" name="save" class="btn btn-primary">Save</button>      
            <button type="reset" name="reset" class="btn btn-danger">Reset</button>  
        </div>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>





