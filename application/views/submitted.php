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
        <a class="nav-link" href="<?= base_url('index.php/user/main') ?>">Home
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
    <div class="container text-center">
        <h2>DATA HAS BEEN UPDATED SUCCESSFULLY..!!</h2>
        
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;margin: auto;">
            <div class="card-header">Updated Data</div>
            <div class="card-body">
                <p class="card-title">
                    ROLL NUMBER : <?= $user->roll_num; ?><br>
                    NAME :  <?= $user->name; ?><br>
                    ADDRESS :  <?= $user->adr; ?><br>
                    CITY :  <?= $user->city; ?><br>
                    MOBILE :  <?= $user->contact; ?><br>
                    STANDARD :  <?= $user->std; ?><br>
                </p>
                <p class="card-text"><a class="btn btn-primary btn-lg" href="<?= base_url('index.php/user/sort') ?>" role="button">GO BACK</a></p>
            </div>
        </div>
            
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
