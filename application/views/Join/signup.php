<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>User Sign Up</title>
</head>
<body>
<br>
<br>
<div class="panel panel-default col-lg-offset-4 col-lg-4">
    <div class="panel-heading"><strong>Sign Up</strong></div>
    <form action="<?=site_url('home_handle/signup/user')?>" method="post" name="frmUserSignUp">

        <div class="panel-body">
            <section class="form-group"><input type="text" placeholder="User Name*" class="form-control" name="username"></section>
            <section class="form-group"><input type="email" placeholder="Email*" class="form-control" name="email"></section>
            <section class="form-group"><input type="password" placeholder="Password*" class="form-control" name="pwd"></section>
            <section class="form-group"><input type="password" placeholder="Confirm Password*" class="form-control" name="re-pwd"></section>
        </div>
        <div class="panel-footer">
            <input class="btn btn-default" type="submit" value="Sign Up">
            <input class="btn btn-default" type="reset" value="Clear">
        </div>
    </form>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>