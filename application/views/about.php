<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
    <title>Document</title>

</head>
<style>
    .btn1{
        width:1920px;
        height:400px;
    }
    .bg {
    background: url(http://localhost/abcschool/css/stud1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-size: 100px;
    color: ghostwhite;
}
    .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
</style>
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
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main'); ?>">Home</a>
      </li>
        
      </ul>
      <form class="form-inline ml-auto">
        <a href="<?= base_url('login') ?>"><button class="btn btn-secondary my-2 my-sm-0" type="button">ADMIN PAGE</button></a>
        <a href="<?= base_url('student') ?>"><button class="btn btn-secondary my-2 my-sm-0" type="button">STUDENT PAGE</button></a>
    </form>
    </div>
  </div>
</nav>
<div class="row">
    
    <div>
        <a href="<?= base_url('admission') ?>" ><button class="btn btn1 bg">ADMISSION OPEN REGISTER NOW</button></a>
    </div>
</div>

</body>
</html>