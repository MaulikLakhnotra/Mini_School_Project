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
          <li><a class="dropdown-item" href="<?= base_url('studdb') ?>">STUDENT DB</a></li>
            <li><a class="dropdown-item" href="<?= base_url('admissiondb') ?>">ADMISSION APPLICATIONS</a></li>
          </ul>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('principal') ?>">Back</a>
          
      </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CONTACT</th>
            <th>ADDRESS</th>
        </tr>
        <?php foreach($data as $value) { ?>
        <tr>
            <td><?= $value->id; ?></td>
            <td><?= $value->name; ?></td>
            <td><?= $value->contact; ?></td>
            <td><?= $value->address; ?></td>
        </tr>
        <?php } ?>
    </table>
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>