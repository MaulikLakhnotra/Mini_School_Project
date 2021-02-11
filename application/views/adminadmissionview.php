<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Document</title>
<style>
  .fs{
    font-size: 35px;  
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Database
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url('studdb') ?>">STUDENT DB</a></li>
            <li><a class="dropdown-item" href="<?= base_url('admissiondb') ?>">ADMISSION APPLICATIONS</a></li>
            <li><a class="dropdown-item" href="<?= base_url('teacherdb') ?>">TEACHER DB</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('css/cal.jpg') ?>">Calender</a>
        </li>
        
      </ul>
      <a href="<?= base_url('loggedout') ?>"><button class="btn btn-danger">Log Out</button></a>
    </div>
  </div>
</nav>
            <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST Name</th>
                <th>EMAIL</th>
                <th>Contact</th>
                <th>Standard</th>
                <th>Marksheet</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data as $value) { ?>
              <tr class="table-active">
              <th><?= $value->id; ?></th>
              <th class="fs"><?= $value->fname; ?></th>
              <th class="fs"><?= $value->lname; ?></th>
              <th><?= $value->email; ?></th>
              <th class="fs"><?= $value->contact; ?></th>
              <th class="fs"><?= $value->std; ?></th>
              <th><a href="<?= base_url('marksheets/').$value->upload; ?>"><button class="btn btn-primary" style="height:100px;width:200px;background:url(<?= base_url('marksheets/').$value->upload; ?>);); background-size: 200px 100px;"><b style="color:black;border: 5px solid red;font-size: 20px;">View Marksheet</b></button></a></th>
              </tr>
              <?php } ?> 
    
    </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>