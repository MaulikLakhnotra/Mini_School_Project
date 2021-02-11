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
        <a class="nav-link" href="<?= base_url('about'); ?>">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<h2>WELCOME TO ADMISSION PAGE PLEASE FILL THE FORM</h2>
<div class="container">
    <form action="<?= base_url('admission')?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>First Name :</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your First Name">
            <span style="color:red;"><?= form_error('fname') ?></span>
            <label>Last Name :</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Last Name">
            <span style="color:red;"><?= form_error('lname') ?></span>
            <label>Standard :</label>
            <input type="text" class="form-control" id="std" name="std" placeholder="Enter Standard ">
            <!-- <small>in which you want admission</small> -->
            <span style="color:red;"><?= form_error('std') ?></span>
            <label>Contact :</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Your contact Number">
            <span style="color:red;"><?= form_error('contact') ?></span>
            <label>Email :</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
            <span style="color:red;"><?= form_error('email') ?></span><hr>
            <label>Upload Image</label>
            <input type="file" name="marksheet" id="marksheet" class="btn btn-dark"> <hr>
            <button type="submit" name="save" class="btn btn-primary w-100">Save</button>      
            <a href="<?= base_url('main') ?>"><button type="button" name="cancel" class="btn btn-danger w-100">Cancel</button></a>  
            <?php  ?> 
        </div>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>