<div class="content col-sm-offset-2">
    <?php
    $mobiles=$items['mobile'];
    $tablets=$items['tablet'];
    if(!empty($mobiles)) {
        $path=base_url()."images/uploads/";
        foreach($mobiles as $key=>$mobile) {
            $id = $mobile['id'];
            $name = $mobile['name'];
            $brand = $mobile['brand'];
            $launch = $mobile['launch'];
            $price = $mobile['price'];

            $network = $mobile['network'];
            $body = $mobile['body'];
            $display = $mobile['display'];
            $platform = $mobile['platform'];
            $sensor = $mobile['sensor'];
            $camera = $mobile['camera'];
            $sound = $mobile['sound'];
            $battery = $mobile['battery'];
            $filename = $mobile['filename'];

            ?>
            <div class='thumbnail col-lg-3 col-md-4 col-sm-4' style='margin:10px;'>
                <a role="button" data-toggle="modal" data-target="#modal_mob<?=$id?>"><img src="<?= $path . 'prev/prev_mob' . $id . '_' . $filename ?>" height='190px' width=130px'></a>
                <div style='height:100px;' class='caption'>
                    <h5 align='center'><strong><?=$name?></strong></h5>
                    <button class="btn btn-success pull-left">Add to cart</button>
                    <em class="pull-right">Price: Rs. <?=$price?></em>

                </div>
            </div>


            <div class="modal" id="modal_mob<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="label_mob<?=$id?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" id="label_mob<?=$id?>">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <br />
                            <h3 class="modal-title"><strong><?= $name ?></strong>
                                <em class="pull-right">Rs. <?=$price?></em>
                            </h3>
                        </div>
                        <div class="modal-body">
                            <center><img src="<?= $path . 'full/full_mob' . $id . '_' . $filename ?>" width="200" height="350"/>
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

    if(!empty($tablets)) {
        foreach($tablets as $key=>$tablet) {
            $id = $tablet['id'];
            $name = $tablet['name'];
            $brand = $tablet['brand'];
            $launch = $tablet['launch'];
            $price = $tablet['price'];

            $network = $tablet['network'];
            $body = $tablet['body'];
            $display = $tablet['display'];
            $platform = $tablet['platform'];
            $sensor = $tablet['sensor'];
            $camera = $tablet['camera'];
            $sound = $tablet['sound'];
            $battery = $tablet['battery'];
            $filename = $tablet['filename'];

            ?>
            <div class='thumbnail col-lg-3 col-md-4 col-sm-4' style='margin:10px;'>
                <a role="button" data-toggle="modal" data-target="#modal_tab<?=$id?>"><img src="<?= $path . 'prev/prev_tab' . $id . '_' . $filename ?>" height='190px' width=130px'></a>
                <div style='height:100px;' class='caption'>
                    <h5 align='center'><strong><?=$name?></strong></h5>
                    <button class="btn btn-success pull-left">Add to cart</button>
                    <em class="pull-right">Price: Rs. <?=$price?></em>

                </div>
            </div>


            <div class="modal" id="modal_tab<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="label_tab<?=$id?>">
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
                            <center><img src="<?= $path . 'full/full_tab' . $id . '_' . $filename ?>" width="200" height="350"/>
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


