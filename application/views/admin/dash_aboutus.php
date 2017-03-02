<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
        <div class="panel-heading"><div class="panel-title">About Us Page</div></div>
        <div class="panel-body">
            <form name="editAboutus" method="post" action="">
                <div class="form-group">
                    <label for="aboutusHeader">Header:</label>
                    <Input id="aboutusHeader" name="header" type="text" value="<?php echo $pageInfo['header']; ?>" placeholder="Type about us header here" class="form-control">
                </div>
                <div class="form-group" style="overflow:auto;">
                    <label for="aboutusBody">Body:</label>
                    <textarea id="aboutusBody" name="body" placeholder="Type about us body here" class="form-control" rows="12"><?php echo $pageInfo['body']; ?></textarea>
                </div>
                <div class="form-group pull-left">
                    <input type="submit" name="edit" class="btn btn-default" value="Edit">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" class="btn btn-default" value="Clear" onclick="$(function(){document.getElementById('aboutusHeader').value=''; document.getElementById('aboutusBody').value='';})">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


