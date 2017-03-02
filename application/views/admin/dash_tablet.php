<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
        <div style="float:right; text-align: right;padding-top: 2px; margin-right:5px" ><a href="<?=site_url('admins/newTablet')?>" class='btn btn-default'>Add New</a></div>
        <div class="panel-heading">
            Tablets
        </div>
        <div class="panel-body">
            <?php
            if(!empty($tablet_list)) {
                echo '<div class="panel-group" role="tablist" aria-multiselectable="true" id="accordion">';
                ?>
                <div style="height:1em; font-size:14px;">
                    <div style="float:left; width:20%; margin-right:40px;"><b>Name</b></div>
                    <div style="float:left; margin-right: 20px;"><b>Brand</b></div>
                    <div style="float:right;"><b>Price &nbsp;</b></div>
                </div>
                <br>

                <?php
                foreach ($tablet_list as $key => $value) {
                    $id = 0;
                    $name = "";
                    $brand="";
                    $launch="";
                    $price = "";

                    $network="";
                    $body="";
                    $display="";
                    $platform="";
                    $sensor="";
                    $camera="";
                    $sound="";
                    $battery="";

                    $path=base_url().'images/uploads/';
                    $filename = "";
                    foreach ($value as $key1 => $value1) {
                        ${$key1} = $value1;
                    }
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading_<?php echo $id; ?>">
                            <h4 class="panel-title">
                                <a href="#msg_<?php echo $id; ?>" role="button" data-toggle="collapse"
                                   data-parent="#accordion" aria-expanded="false" aria-controls="msg_<?php echo $id; ?>">
                                    <div style="height:1em; font-size:14px;">
                                        <div style="float:left; width:20%; margin-right:40px;"><b><?php echo $name; ?></b>
                                        </div>
                                        <div style="float:left; margin-right: 20px;"><?php echo $brand; ?></div>
                                        <div style="float:right;"><?php echo "Rs. ".$price; ?></div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div class="panel-collapse collapse" id="msg_<?php echo $id; ?>" role="tabpanel"
                             aria-labelledby="heading_<?php echo $id; ?>">
                            <div class="panel-body">
                                <div class='thumbnail col-lg-offset-4 col-lg-2'>
                                    <br>
                                    <img height='50px' width='50px' src="<?php
                                    $temp = $path . 'thumb/'.'thumb_tab' . $id . '_' . $filename;
                                    echo $temp;
                                    ?>">

                                    <div class="caption"><h4 align="right">Preview</h4></div>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default"
                                       href="<?=site_url('admins/editTablet/'.$id)?>">Update</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-default" onclick="return confirm('Are you sure to delete?')"
                                       href="<?=site_url('admins/removeTablet').'/'.$id.'/'.$filename?>">Delete</a>
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