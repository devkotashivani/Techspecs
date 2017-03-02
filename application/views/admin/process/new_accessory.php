<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Insert Accessory</title>
</head>
<body>
<div id="insertAccessory_main" class="_main">
    <a href="<?=site_url('admins/loadDash/accessory')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="insertAccessory_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Add New Accessory
                </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/addAccessory')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="insertAccessory_id">Id: </label>
                    <input type="text" id="insertAccessory_id" name="id" readonly>
                </div>
                <div class="form-group">
                    <label for="insertAccessory_name">Name:</label>
                    <input class="form-control" type="text" id="insertAccessory_name" name="name">
                </div>
                <div class="form-group">
                    <label for="insertAccessory_type">Type:</label>
                    <input class="form-control" type="text" id="insertAccessory_type" name="type">
                </div>
                <div class="form-group">
                    <label for="insertAccessory_price">Price:</label>
                    <input class="form-control" type="text" id="insertAccessory_price" name="price">
                </div>
                <div class="form-group">
                    <div id="insertAccessory_img" class="_img"><img id="blah" height="290px" width="200px"/></div>
                    <input class="center-block" type="file" name="myFile" onchange="readURL(this,'#blah')" />
                </div>
                <div class="form-group">
                    <label for="insertAccessory_description">Description:</label>
                    <textarea class="form-control" name="description" id="insertAccessory_description"></textarea>
                </div>
                <div class="form-group">
                    <label for="insertAccessory_scope">Scope:</label>
                    <textarea class="form-control" name="scope" id="insertAccessory_scope"></textarea>
                </div>
                <input class="btn btn-default pull-right" type="submit" id="insertAccessory_btn" value="Insert Item">
            </form>
        </div>
    </div>
</div>

<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>
