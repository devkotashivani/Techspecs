<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>Edit Accessory</title>
</head>
<body>
<?php
    $id=$accessory['id'];
    $name=$accessory['name'];
    $type=$accessory['type'];
    $price=$accessory['price'];
    $description=$accessory['description'];
    $scope=$accessory['scope'];

    $path=base_url().'images/uploads/prev/prev_acc'.$id."_";
    $filename=$accessory['filename'];

?>

<div id="updateAccessory_main" class="_main">
    <a href="<?=site_url('admins/loadDash/accessory')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div id="updateAccessory_container" class="panel panel-default col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8">
        <div class="panel-heading"><h1 class="panel-title" align="center"><strong>Edit Accessory
                </strong></h1></div>
        <div class ="panel-body">
            <form method="post" action="<?=site_url('admins/updateAccessory/'.$id)?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="updateAccessory_id">Id: </label>
                    <input type="text" id="updateAccessory_id" name="id" value="<?=$id?>" readonly>
                </div>
                <div class="form-group">
                    <label for="updateAccessory_name">Name:</label>
                    <input class="form-control" type="text" id="updateAccessory_name" name="name" value="<?=$name?>">
                </div>
                <div class="form-group">
                    <label for="updateAccessory_type">Type:</label>
                    <input class="form-control" type="text" id="updateAccessory_type" name="type" value="<?=$type?>">
                </div>
                <div class="form-group">
                    <label for="updateAccessory_price">Price:</label>
                    <input class="form-control" type="text" id="updateAccessory_price" name="price" value="<?=$price?>">
                </div>
                <div id="updateAccessory_img" class="_img"><img id="blahGemsUp" height="290px" width="200px" src="<?php echo $path.$filename; ?>"/>
                    <p><strong><center>Image Preview</center></strong></p><br><br>
                </div>
                <div class="form-group">
                    <label for="updateAccessory_description">Description:</label>
                    <textarea class="form-control" name="description" id="updateAccessory_description"><?=$description?></textarea>
                </div>
                <div class="form-group">
                    <label for="updateAccessory_scope">Scope:</label>
                    <textarea class="form-control" name="scope" id="updateAccessory_scope"><?=$scope?></textarea>
                </div>
                <input class="btn btn-default pull-right" type="submit" id="updateAccessory_update" value="Update Item">
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
