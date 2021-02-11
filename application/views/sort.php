<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?= base_url('css/a.png')?>" style="height:50px; width:50px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?= base_url('admissiondb') ?>">ADMISSION APPLICATIONS</a></li>
            <li><a class="dropdown-item" href="<?= base_url('teacherdb') ?>">TEACHER DB</a></li>
          </ul>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('principal') ?>">Back</a>
          
      </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<?php
    $a = count($rn);
?>
<div class="container text-center">
    <h2>Welcome to sort data</h2>

    <form action="" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-10">
                <input type="text" class="form-control" id="standard" name="standard" placeholder="Enter Standard">
            </div>
            <div class="col-md-2 text-right">    
                <button type="submit" name="sort" class="btn btn-primary">Search</button>      
            </div>
        </div>
    </div>
    </form>

<?php
    if (isset($_POST['standard']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Contact</th>
                <th>Standard</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($stdsort as $value) { ?>
              <tr class="table-active">
              <th><?= $value['roll_num']; ?></th>
              <th><?= $value['name']; ?></th>
              <th><?= $value['adr']; ?></th>
              <th><?= $value['city']; ?></th>
              <th><?= $value['contact']; ?></th>
              <th><?= $value['std']; ?></th>
              </tr>
              <?php } ?> 
<?php } ?>

    <form method="post">
        <div class="form-group">
        <H4>TOTAL DATA INSERTED BY STUDENTS IS <?= $a ?> ROWS</H4>
        <H3>VIEW BY</H3>
        <button type="submit" name="all" class="btn btn-primary">Display All</button>
        <button type="submit" name="rn" class="btn btn-primary">Roll Number</button>
        <button type="submit" name="name" class="btn btn-primary">Name</button>
        <button type="submit" name="adr" class="btn btn-primary">Address</button>
        <button type="submit" name="city" class="btn btn-primary">City</button>
        <button type="submit" name="contact" class="btn btn-primary">Contact</button>
        <button type="submit" name="std" class="btn btn-primary">Standard</button> 
    </form>
   
<?php
    if (isset($_POST['all']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Contact</th>
                <th>Standard</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data as $value) { ?>
              <tr class="table-active">
              <th><?= $value->id; ?></th>
              <th><?= $value->roll_num; ?></th>
              <th><?= $value->name; ?></th>
              <th><?= $value->adr; ?></th>
              <th><?= $value->city; ?></th>
              <th><?= $value->contact; ?></th>
              <th><?= $value->std; ?></th>
              <th><a href="<?= base_url('index.php/admin/edit/'.$value->id)?>"><button type="button" name="edit" class="btn btn-primary">Update</button></a></th>
              <th><a href="<?= base_url('index.php/admin/changes'); ?>"><button type="button" name="edit" class="btn btn-primary">Delete</button></a></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['rn']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Roll Number</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($rn as $value) { ?>
              <tr class="table-active">
              <th><?= $value['roll_num']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['name']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($name as $value) { ?>
              <tr class="table-active">
              <th><?= $value['name']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['adr']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($adr as $value) { ?>
              <tr class="table-active">
              <th><?= $value['adr']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['city']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>City</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($city as $value) { ?>
              <tr class="table-active">
              <th><?= $value['city']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['contact']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($contact as $value) { ?>
              <tr class="table-active">
              <th><?= $value['contact']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
<?php
    if (isset($_POST['std']))
    { ?>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Std</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($std as $value) { ?>
              <tr class="table-active">
              <th><?= $value['std']; ?></th>
              </tr>
              <?php } ?> 
    <?php } ?>
    </div>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>