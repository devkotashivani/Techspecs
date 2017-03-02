<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>User Login</title>
</head>
<body>
<br>
<br>
<div class="panel panel-default col-lg-offset-4 col-lg-4">
    <div class="panel-heading"><strong>Admin Login</strong></div>
    <form action="<?=site_url("admins/adLogin");?>" method="post" name="frmAdLogin">

        <div class="panel-body">
            <section class="form-group"><input type="email" name ="email" placeholder="Email*" class="form-control"></section>
            <section class="form-group"><input type="password" name="pwd" placeholder="Password*" class="form-control"></section>
        </div>
        <div class="panel-footer">
            <input class="btn btn-default" type="submit" value="Login">
            <input class="btn btn-default" type="reset" value="Clear">
        </div>
    </form>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>