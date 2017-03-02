<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Edit Mobile</title>
</head>
<body>
<?php
    $id=$mobile['id'];
    $name=$mobile['name'];
    $brand=$mobile['brand'];
    $price=$mobile['price'];
    $launch=$mobile['launch'];
    $network=$mobile['network'];
    $body=$mobile['body'];
    $display=$mobile['display'];
    $platform=$mobile['platform'];
    $sensor=$mobile['sensor'];
    $camera=$mobile['camera'];
    $sound=$mobile['sound'];
    $battery=$mobile['battery'];

    $path=base_url().'images/uploads/prev/prev_mob'.$id."_";
    $filename=$mobile['filename']

?>

<div id="updateMobile_main" class="_main">
    <a href="<?=site_url('admins/loadDash/mobile')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="updateMobile_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Edit Mobile
                </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/updateMobile/'.$id)?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="updateMobile_id">Id: </label>
                    <input type="text" id="updateMobile_id" name="id" value="<?=$id?>" readonly>
                </div>
                <div class="form-group">
                    <label for="updateMobile_name">Name:</label>
                    <input class="form-control" type="text" id="updateMobile_name" name="name" value="<?=$name?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_brand">Brand:</label>
                    <input class="form-control" type="text" id="updateMobile_brand" name="brand" value="<?=$brand?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_price">Price:</label>
                    <input class="form-control" type="text" id="updateMobile_price" name="price" value="<?=$price?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_launch">Launch Date:</label>
                    <input class="form-control" type="text" name="launch" id="updateMobile_launch" value="<?=$launch?>">
                </div>
                <div class="form-group"></div>
                <div id="updateMobile_img" class="_img"><img id="blahGemsUp" height="290px" width="200px" src="<?php echo $path.$filename; ?>"/>
                    <p><strong><center>Image Preview</center></strong></p><br><br>
                </div>
                <div class="form-group">
                    <label for="updateMobile_network">Network:</label>
                    <input class="form-control" type="text" name="network" id="updateMobile_network" value="<?=$network?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_body">Body:</label>
                    <input class="form-control" type="text" name="body" id="updateMobile_body" value="<?=$body?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_display">Display:</label>
                    <input class="form-control" type="text" name="display" id="updateMobile_display" value="<?=$display?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_platform">Platform:</label>
                    <input class="form-control" type="text" name="platform" id="updateMobile_platform" value="<?=$platform?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_sensor">Sensor:</label>
                    <input class="form-control" type="text" name="sensor" id="updateMobile_sensor" value="<?=$sensor?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_camera">Camera:</label>
                    <input class="form-control" type="text" name="camera" id="updateMobile_camera" value="<?=$camera?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_sound">Sound:</label>
                    <input class="form-control" type="text" name="sound" id="updateMobile_sound" value="<?=$sound?>">
                </div>
                <div class="form-group">
                    <label for="updateMobile_battery">Battery:</label>
                    <input class="form-control" type="text" name="battery" id="updateMobile_battery" value="<?=$battery?>">
                </div>
            <input class="btn btn-default pull-right" type="submit" id="updateMobile_update" value="Update Item">
            <br />
        </form>
        <br>
    </div>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>
