<div class="container-fluid">
<?php
if(!empty($topic)){
?>
<div class="panel panel-default" style="margin-left: 0;margin-right: 0;">
    <div class="panel-heading col-lg-12">
        <div class="col-lg-offset-3 col-lg-6" style="margin-right: auto; margin-left: auto;">
            <strong class="panel-title"><?php echo $topic['topic']; ?></strong><br/>
            <?php echo $topic['detail']; ?><br/>
            <?php $date1=new DateTime();
            $date1->setTimestamp((int)$topic['datetime']);
            $d1=date_format($date1, "d M Y, h:i:s a");?>
            <strong>By :</strong> <?php echo $topic['name']; ?> <strong>Email : </strong><?php echo $topic['email'];?><br/>
            <strong>Date/time : </strong><?php echo $d1; ?>
        </div>
        <a href="<?=site_url('forums')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
    </div>
    <div class="panel-body col-lg-12">
        <div class="row">
                <?php
                if(!empty($reply)) {
                    echo "<div class='col-lg-7'>";
                    foreach ($reply as $key => $rows) {
                        ?>
                        <div class="tableSmall">
                            <table width="80%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                                <tr>
                                    <td>
                                        <table width="80%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                            <tr>
                                                <td bgcolor="#F8F7F1"><strong>ID</strong>:<?php echo $rows['a_id']; ?></td>
                                                <td bgcolor="#F8F7F1"><strong>Name</strong>:<?php echo $rows['a_name']; ?></td>
                                                <td bgcolor="#F8F7F1"><strong>Email</strong>:<?php echo $rows['a_email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#F8F7F1" colspan="3"><strong>Answer</strong>:<?php echo $rows['a_answer']; ?></td>
                                            </tr>
                                            <tr>
                                                <?php $date=new DateTime();
                                                $date->setTimestamp((int)$rows['a_datetime']);
                                                $d=date_format($date, "d M Y, h:i:s a");?>
                                                <td bgcolor="#F8F7F1" colspan="3" align="right"><strong>Date/Time</strong>:<?php echo $d; ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php
                    }
                    echo "</div>";
                }
                else
                {
                    echo "<div style='min-height: 300px' class='col-lg-7'><br><br><strong>No Replies Yet!</strong></div>";
                }
                ?>

            <div class="col-lg-5">
                <h1>Add a Reply</h1>
                <form name="form1" method="post" action="<?=site_url('forums/addReply').'/'.$topic['id']?>">
                    <div class="form-group">
                        <label for="a_name"><strong>Name</strong>:</label>
                        <input name="a_name" class="form-control" type="text" id="a_name" required>
                    </div>
                    <div class="form-group">
                        <label for="a_email"><strong>Email</strong>:</label>
                        <input name="a_email" class="form-control" type="email" id="a_email" required>
                    </div>
                    <div class="form-group">
                        <label for="a_answer"><strong>Answer</strong>:</label>
                        <textarea name="a_answer" class="form-control" rows="3" id="a_answer" required></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-default" type="submit" name="Submit" value="Submit"> <input class="btn btn-default" type="reset" name="Submit2" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>
    </div>


