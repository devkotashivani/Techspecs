<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Insert Tablet</title>
</head>
<body>
<div id="insertTAblet_main" class="_main">
    <a href="<?=site_url('admins/loadDash/tablet')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="insertTAblet_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">

        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Add New Tablet
        </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/addTablet')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="insertTablet_id">Id: </label>
                    <input type="text" id="insertTablet_id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="insertTablet_name">Name:</label>
                    <input class="form-control" type="text" id="insertTablet_name" name="name">
                </div>
                <div class="form-group">
                    <label for="insertTablet_brand">Brand:</label>
                    <input class="form-control" type="text" id="insertTablet_brand" name="brand">
                </div>
                <div class="form-group">
                    <label for="insertTablet_price">Price:</label>
                    <input class="form-control" type="text" id="insertTablet_price" name="price">
                </div>
                <div class="form-group">
                    <label for="insertTablet_launch">Launch Date:</label>
                    <input class="form-control" type="text" name="launch" id="insertTablet_launch">
                </div>
                <div class="form-group">
                    <div id="insertTablet_img" class="_img"><img id="blah" height="290px" width="200px"/></div>
                    <input class="center-block" type="file" name="myFile" onchange="readURL(this,'#blah')" />
                </div>
                <div class="form-group">
                    <label for="insertTablet_network">Network:</label>
                    <input class="form-control" type="text" name="network" id="insertTablet_network">
                </div>
                <div class="form-group">
                    <label for="insertTablet_body">Body:</label>
                    <input class="form-control" type="text" name="body" id="insertTablet_body">
                </div>
                <div class="form-group">
                    <label for="insertTablet_display">Display:</label>
                    <input class="form-control" type="text" name="display" id="insertTablet_display">
                </div>
                <div class="form-group">
                    <label for="insertTablet_platform">Platform:</label>
                    <input class="form-control" type="text" name="platform" id="insertTablet_platform">
                </div>
                <div class="form-group">
                    <label for="insertTablet_sensor">Sensor:</label>
                    <input class="form-control" type="text" name="sensor" id="insertTablet_sensor">
                </div>
                <div class="form-group">
                    <label for="insertTablet_camera">Camera:</label>
                    <input class="form-control" type="text" name="camera" id="insertTablet_camera">
                </div>
                <div class="form-group">
                    <label for="insertTablet_sound">Sound:</label>
                    <input class="form-control" type="text" name="sound" id="insertTablet_sound">
                </div>
                <div class="form-group">
                    <label for="insertTablet_battery">Battery:</label>
                    <input class="form-control" type="text" name="battery" id="insertTablet_battery">
                </div>
                <input class="btn btn-default pull-right" type="submit" id="insertTablet_btn" value="Insert Item">
            </form>
        </div>
    </div>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>
