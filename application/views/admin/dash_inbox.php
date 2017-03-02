<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
        <div class="panel-heading">
            Inbox
        </div>
        <div class="panel-body">
            <?php
            if(!empty($mail_list)) {
                echo '<div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion">';
                ?>
                <div style="height:1em; font-size:14px;">
                    <div style="float:left; width:20%; margin-right:40px;"><b>Email</b></div>
                    <div style="float:left; margin-right: 20px;"><b>Subject</b></div>
                    <div style="float:right;"><b>Date & time &nbsp;</b></div>
                </div>
                <br>

                <?php
                foreach ($mail_list as $key => $value) {
                    $id = 0;
                    $name = "";
                    $email = "";
                    $subject = "";
                    $date_time = "";
                    $msg = "";
                    foreach ($value as $key1 => $value1) {
                        ${$key1} = $value1;
                    }
                    $date = new DateTime($date_time);
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_<?php echo $id; ?>">
                            <h4 class="panel-title">
                                <a href="#msg_<?php echo $id; ?>" role="button" data-toggle="collapse"
                                   data-parent="#accordion" aria-expanded="false" aria-controls="msg_<?php echo $id; ?>">
                                    <div style="height:1em; font-size:14px;">
                                        <div style="float:left; width:20%; margin-right:40px;"><b><?php echo $email; ?></b>
                                        </div>
                                        <div style="float:left; margin-right: 20px;"><?php echo $subject; ?></div>
                                        <div style="float:right;"><?php echo date_format($date, "d M Y, h:i:s a") ?></div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="msg_<?php echo $id; ?>" role="tabpanel"
                             aria-labelledby="heading_<?php echo $id; ?>">
                            <div class="panel-body">
                                <p align="justify"><?php echo $msg; ?></p>

                                <div class="pull-right">
                                    <a class="btn btn-default" href="<?=site_url('admins/mailBack'.'/'.$id)?>">Mail
                                        Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-default" onclick="return confirm('Are you sure to delete?')"
                                       href="<?=site_url('admins/deleteMail').'/'.$id?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>