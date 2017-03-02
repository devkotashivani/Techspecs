<!DOCTYPE html>
<html ng-app="store" lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Mobiles</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>"><img height="20 px" width="20px" src="<?=base_url()?>images/icons/home.png"/></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li <?php if($page=="mobile"){echo "class='active'";} ?>><a href="<?=site_url('home_handle/loadPage/mobile')?>">Mobiles</a></li>
                <li <?php if($page=="tablet"){echo "class='active'";} ?>><a href="<?=site_url('home_handle/loadPage/tablet')?>">Tablets</a></li>
                <li <?php if($page=="accessory"){echo "class='active'";} ?>><a href="<?=site_url('home_handle/loadPage/accessory')?>">Accessories</a></li>
                <li <?php if($page=="new_release"){echo "class='active'";} ?>><a href="<?=site_url('home_handle/loadPage/new_release')?>">New Releases</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><input class="navbar-form" style="margin-top: 17px" type="text" placeholder="Search..."</li>
                <li><a href="#"><img height="20 px" width="20px" src="<?=base_url()?>images/icons/search.png"/></a></li>
                <li>
                    <?php
                        if($this->session->userdata('username')) {
                            $user=$this->session->userdata('username');
                            $email=$this->session->userdata('email');
                            $credit = substr($user, 0, 1);
                            echo "<div class='user_credidential pull-right'>";
                            echo "<div class='user_logo'>$credit</div>";
                            echo "<div class='user_info'>{$user}<br/>{$email}";
                            echo "<div class='logout'><a href='".site_url('home_handle/logout')."'>Sign-Out</a></div>";
                        }
                        else
                        {
                            $url=site_url('home_handle/loginPage');
                            echo "<a href='$url'>Login</a>";
                        }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>


