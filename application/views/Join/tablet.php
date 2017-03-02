<div class="content col-sm-offset-2">
<?php
if(!empty($items)) {?>
    <?php
    $path=base_url()."images/uploads/";
    $sn=1;
    foreach($items as $key=>$item) {
        $id = $item['id'];
        $name = $item['name'];
        $brand = $item['brand'];
        $launch = $item['launch'];
        $price = $item['price'];

        $network = $item['network'];
        $body = $item['body'];
        $display = $item['display'];
        $platform = $item['platform'];
        $sensor = $item['sensor'];
        $camera = $item['camera'];
        $sound = $item['sound'];
        $battery = $item['battery'];
        $filename = $item['filename'];

        ?>
        <div class='thumbnail col-lg-3 col-md-4 col-sm-4' style='margin:10px;'>
            <a role="button" data-toggle="modal" data-target="#modal_tab<?=$id?>"><img src="<?= $path . 'prev/prev_tab' . $id . '_' . $filename ?>" height='190px' width=130px'></a>
            <div style='height:100px;' class='caption'>
                <h5 align='center'><strong><?=$name?></strong></h5>
                <button class="btn btn-success pull-left">Add to cart</button>
                <em class="pull-right">Price: Rs. <?=$price?></em>

            </div>
        </div>


        <div class="modal" id="modal_tab<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="label_acc<?=$id?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="label_tab<?=$id?>">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <br />
                        <h3 class="modal-title"><strong><?= $name ?></strong>
                            <em class="pull-right">Rs. <?=$price?></em>
                        </h3>
                    </div>
                    <div class="modal-body">
                        <center><img src="<?= $path . 'prev/prev_tab' . $id . '_' . $filename ?>" width="200" height="350"/>
                        </center>
                        <div>
                            <button class="btn btn-success pull-right">Add to cart</button>
                        </div>
                        <div style="width:60%; margin-left:auto; margin-right:auto; margin-top: 10px" ng-controller="PanelController as panel">
                            <ul class="nav nav-pills" align="center">
                                <li ng-class="{active:panel.isSelected(1)}"><a href ng-click="panel.selectTab(1)">Descripton</a>
                                </li>
                                <li ng-class="{active:panel.isSelected(2)}"><a href ng-click="panel.selectTab(2)">Specification</a>
                                </li>
                                <li ng-class="{active:panel.isSelected(3)}"><a href ng-click="panel.selectTab(3)">Review</a></li>
                            </ul>
                            <div style="min-height: 200px;" class="pannel" ng-show="panel.isSelected(1)">
                                <br />
                                <ul>
                                <li><strong>Name:</strong> <?=$name?></li>
                                <li><strong>Brand:</strong> <?=$brand?></li>
                                <li><strong>Launch:</strong> <?=$launch?></li>
                                <li><strong>Price:</strong> Rs. <?=$price?></li>
                                </ul>
                            </div>
                            <div style="min-height: 200px;" class="pannel" ng-show="panel.isSelected(2)">
                                <br />
                                <ul>
                                    <li><strong>Network:</strong> <?=$network?></li>
                                    <li><strong>Body:</strong> <?=$body?></li>
                                    <li><strong>Display:</strong> <?=$display?></li>
                                    <li><strong>Platform:</strong> Rs. <?=$platform?></li>
                                    <li><strong>Sensor:</strong> Rs. <?=$sensor?></li>
                                    <li><strong>Camera:</strong> Rs. <?=$camera?></li>
                                    <li><strong>Sound:</strong> Rs. <?=$sound?></li>
                                    <li><strong>Battery:</strong> Rs. <?=$battery?></li>
                                </ul>
                            </div>
                            <div style="min-height: 200px;" class="pannel" ng-show="panel.isSelected(3)">
                                <p>TODO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
?>
</div>


