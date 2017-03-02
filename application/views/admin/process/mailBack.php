<?php
    $email=$mail['email'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reply Mail</title>
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
</head>
<body>
<div>
    <a href="<?=site_url('admins/loadDash/inbox')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div class="col-sm-offset-3 col-sm-10 col-md-offset-3 col-md-8 col-lg-6">
        <br>
        <br>
        <H2 align="center">Mail Back to <?php echo $email; ?> </H2>

        <form method="post" action="<?=site_url('admins/reply/'.$mail['id'])?>">
            <fieldset >
                <div class="form-group">
                    <label for="reply_email">Email:</label>
                    <input id="reply_email" name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <input id="reply_subject" name="subject" type="text" class="form-control" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea id="reply_msg" name="msg" class="form-control" rows="3" placeholder="Message" required></textarea>
                </div>
                <div class="form-group pull-right">
                    <input type="reset" class="btn btn-default" value="Clear" onclick="$(function(){document.getElementById('reply_subject').value=''; document.getElementById('reply_msg').value=''})">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-default" value="Send">
                </div>
            </fieldset>
        </form>
    </div>
</div>
<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>