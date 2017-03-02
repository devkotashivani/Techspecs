<div class='carousel slide' id='featured'>
    <ol class='carousel-indicators'>
        <li data-target='#featured' data-slide-to='0' class='active'></li>
        <li data-target='#featured' data-slide-to='1'></li>
        <li data-target='#featured' data-slide-to='2'></li>
        <li data-target='#featured' data-slide-to='3'></li>
        <li data-target='#featured' data-slide-to='4'></li>
        <li data-target='#featured' data-slide-to='5'></li>
    </ol>
    <div class='carousel-inner'>
        <div class='item active'>
            <img src='<?=base_url()?>images/featured/img1.jpg'>
        </div>
        <div class='item'>
            <img src='<?=base_url()?>images/featured/img2.jpg'>
        </div>
        <div class='item'>
            <img src='<?=base_url()?>images/featured/img3.jpg'>
        </div>
        <div class='item'>
            <img src='<?=base_url()?>images/featured/img4.jpg'>
        </div>
        <div class='item'>
            <img src='<?=base_url()?>images/featured/img5.jpg'>
        </div>
        <div class='item'>
            <img src='<?=base_url()?>images/featured/img6.jpg'>
        </div>
        <a class='left carousel-control' href='#featured' role='button' data-slide='prev'>
            <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
        <a class='right carousel-control' href='#featured' role='button' data-slide='next'>
            <span class='glyphicon glyphicon-chevron-right'></span>
        </a>
    </div>
</div>

<div class="container col-sm-offset-1 col-sm-10" style="margin-top: 20px; margin-bottom: 20px;text-align:justify;font-size: 14px">
    <?=$pageInfo['header']?>
    <?=nl2br($pageInfo['body'])?>
</div>