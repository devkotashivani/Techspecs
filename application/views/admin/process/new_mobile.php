<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Insert Mobile</title>
</head>
<body>
<div id="insertMobile_main" class="_main">
    <a href="<?=site_url('admins/loadDash/mobile')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="insertMobile_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">

        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Add New Mobile
        </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/addMobile')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="insertMobile_id">Id: </label>
                    <input type="text" id="insertMobile_id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="insertMobile_name">Name:</label>
                    <input class="form-control" type="text" id="insertMobile_name" name="name">
                </div>
                <div class="form-group">
                    <label for="insertMobile_brand">Brand:</label>
                    <input class="form-control" type="text" id="insertMobile_brand" name="brand">
                </div>
                <div class="form-group">
                    <label for="insertMobile_price">Price:</label>
                    <input class="form-control" type="text" id="insertMobile_price" name="price">
                </div>
                <div class="form-group">
                    <label for="insertMobile_launch">Launch Date:</label>
                    <input class="form-control" type="text" name="launch" id="insertMobile_launch">
                </div>
                <div class="form-group">
                    <div id="insertMobile_img" class="_img"><img id="blah" height="290px" width="200px"/></div>
                    <input class="center-block" type="file" name="myFile" onchange="readURL(this,'#blah')" />
                </div>
                <div class="form-group">
                    <label for="insertMobile_network">Network:</label>
                    <input class="form-control" type="text" name="network" id="insertMobile_network">
                </div>
                <div class="form-group">
                    <label for="insertMobile_body">Body:</label>
                    <input class="form-control" type="text" name="body" id="insertMobile_body">
                </div>
                <div class="form-group">
                    <label for="insertMobile_display">Display:</label>
                    <input class="form-control" type="text" name="display" id="insertMobile_display">
                </div>
                <div class="form-group">
                    <label for="insertMobile_platform">Platform:</label>
                    <input class="form-control" type="text" name="platform" id="insertMobile_platform">
                </div>
                <div class="form-group">
                    <label for="insertMobile_sensor">Sensor:</label>
                    <input class="form-control" type="text" name="sensor" id="insertMobile_sensor">
                </div>
                <div class="form-group">
                    <label for="insertMobile_camera">Camera:</label>
                    <input class="form-control" type="text" name="camera" id="insertMobile_camera">
                </div>
                <div class="form-group">
                    <label for="insertMobile_sound">Sound:</label>
                    <input class="form-control" type="text" name="sound" id="insertMobile_sound">
                </div>
                <div class="form-group">
                    <label for="insertMobile_battery">Battery:</label>
                    <input class="form-control" type="text" name="battery" id="insertMobile_battery">
                </div>
                <input class="btn btn-default pull-right" type="submit" id="insertMobile_btn" value="Insert Item">
            </form>
        </div>
    </div>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>
