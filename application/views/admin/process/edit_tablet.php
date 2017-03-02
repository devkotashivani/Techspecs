<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Edit Tablet</title>
</head>
<body>
<?php
    $id=$tablet['id'];
    $name=$tablet['name'];
    $brand=$tablet['brand'];
    $price=$tablet['price'];
    $launch=$tablet['launch'];
    $network=$tablet['network'];
    $body=$tablet['body'];
    $display=$tablet['display'];
    $platform=$tablet['platform'];
    $sensor=$tablet['sensor'];
    $camera=$tablet['camera'];
    $sound=$tablet['sound'];
    $battery=$tablet['battery'];

    $path=base_url().'images/uploads/prev/prev_tab'.$id."_";
    $filename=$tablet['filename']

?>

<div id="updateTablet_main" class="_main">
    <a href="<?=site_url('admins/loadDash/tablet')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="updateTablet_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Edit Tablet
                </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/updateTablet/'.$id)?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="updateTablet_id">Id: </label>
                    <input type="text" id="updateTablet_id" name="id" value="<?=$id?>" readonly>
                </div>
                <div class="form-group">
                    <label for="updateTablet_name">Name:</label>
                    <input class="form-control" type="text" id="updateTablet_name" name="name" value="<?=$name?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_brand">Brand:</label>
                    <input class="form-control" type="text" id="updateTablet_brand" name="brand" value="<?=$brand?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_price">Price:</label>
                    <input class="form-control" type="text" id="updateTablet_price" name="price" value="<?=$price?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_launch">Launch Date:</label>
                    <input class="form-control" type="text" name="launch" id="updateTablet_launch" value="<?=$launch?>">
                </div>
                <div class="form-group"></div>
                <div id="updateTablet_img" class="_img"><img id="blahGemsUp" height="290px" width="200px" src="<?php echo $path.$filename; ?>"/>
                    <p><strong><center>Image Preview</center></strong></p><br><br>
                </div>
                <div class="form-group">
                    <label for="updateTablet_network">Network:</label>
                    <input class="form-control" type="text" name="network" id="updateTablet_network" value="<?=$network?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_body">Body:</label>
                    <input class="form-control" type="text" name="body" id="updateTablet_body" value="<?=$body?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_display">Display:</label>
                    <input class="form-control" type="text" name="display" id="updateTablet_display" value="<?=$display?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_platform">Platform:</label>
                    <input class="form-control" type="text" name="platform" id="updateTablet_platform" value="<?=$platform?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_sensor">Sensor:</label>
                    <input class="form-control" type="text" name="sensor" id="updateTablet_sensor" value="<?=$sensor?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_camera">Camera:</label>
                    <input class="form-control" type="text" name="camera" id="updateTablet_camera" value="<?=$camera?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_sound">Sound:</label>
                    <input class="form-control" type="text" name="sound" id="updateTablet_sound" value="<?=$sound?>">
                </div>
                <div class="form-group">
                    <label for="updateTablet_battery">Battery:</label>
                    <input class="form-control" type="text" name="battery" id="updateTablet_battery" value="<?=$battery?>">
                </div>
                <input class="btn btn-default pull-right" type="submit" id="updateTablet_update" value="Update Item">
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
