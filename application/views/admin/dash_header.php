<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <title>Admin Panel | TechSpecs</title>

    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/dashStyles.css">


</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url();?>">TechSpecs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php if($this->session->userdata('username')) {
                            $user=$this->session->userdata('username');
                            $email=$this->session->userdata('email');
                            $credit = substr($user, 0, 1);
                            echo "<div class='user_credidential pull-right'>";
                            echo "<div class='user_logo'>$credit</div>";
                            echo "<div class='user_info'>{$user}<br/>{$email}";
                            echo "<div class='logout'><a href='".site_url('home_handle/logout')."'>Sign-Out</a></div>";
                    } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li <?php if($page=="home"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/home")?>">Home Edit </a></li>
                <li <?php if($page=="mobile"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/mobile")?>">Mobile Data</a></li>
                <li <?php if($page=="tablet"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/tablet")?>">Tablet Data</a></li>
                <li <?php if($page=="accessory"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/accessory")?>">Accessory Data</a></li>
                <li <?php if($page=="aboutus"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/aboutus")?>">About Us Edit </a></li>
                <li <?php if($page=="inbox"){echo "class='active'";} ?>><a href="<?=site_url("admins/index/inbox")?>">Inbox Edit</a></li>
            </ul>
        </div>