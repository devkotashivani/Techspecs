<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=base_url()?>styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>styles/defaultStyles.css">
    <title>TechSpecs | Contact Us</title>
</head>
<body>
<div>
    <a href="<?=base_url()?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    <div class="panel panel-primary col-sm-offset-1 col-sm-10">
        <div class="panel-heading"><h1 align="center">Contact Us</h1></div>
        <div class="container">
            <div class="col-sm-4">

                <h2>Contact Information</h2>
                <h4><?php echo $pageInfo['header'];?> </h4>
                <?php echo $pageInfo['body'];?>
                <h2>Our Locations</h2>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

            </div>
            <div class="col-sm-offset-1 col-sm-5">
                <h2>Contact Form</h2>
                <form name="frmContact" method="post" action="<?=site_url('home_handle/sendMail')?>" onsubmit="return contactFormValidate()">

                    <fieldset>
                        <div class="form-group">
                            <label class="sr-only" for="cn_your_name"></label>
                            <input id="cn_your_name" name="yourName" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="cn_email"></label>
                            <input id="cn_email" name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only"></label>
                            <input id="cn_subject" name="subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label class="sr-only"></label>
                            <textarea id="cn_msg" name="msg" class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn btn-default" value="Clear">
                            <input type="submit" class="btn btn-default" value="Send">
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/defaultJs.js"></script>
</body>
</html>