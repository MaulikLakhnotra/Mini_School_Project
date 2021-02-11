<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

    <h2 class="text-center">HELLO TEACHER/ADMIN PLEASE LOGIN HERE</h2><hr>
        <div class="container" style="width:25%;">
            <form method="post" action="<?= base_url('loginpage') ?>">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <?php echo form_error('email') ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <?php echo form_error('password') ?>
                </div><hr>
                <button type="submit" class="btn btn-primary" style="width:100%;">Login</button> <hr>
                <a href="<?= base_url('main') ?>"><button type="button" name="cancel" class="btn btn-danger" style="width:100%;">Cancel</button></a>         
            </form>
        </div>
</body>
</html>