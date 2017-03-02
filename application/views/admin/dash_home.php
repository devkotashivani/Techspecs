        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="panel panel-default">
                <div class="panel-heading">Home Page</div>
                <div class="panel-body">
                    <form name="editHome" method="post" action="">
                        <div class="form-group">
                            <label for="homeHeader">Header:</label>
                            <Input id="homeHeader" name="header" type="text" value="<?php echo $pageInfo['header']; ?>" placeholder="Type home header here" class="form-control">
                        </div>
                        <div class="form-group" style="overflow:auto;">
                            <label for="homeBody">Body:</label>
                            <textarea id="homeBody" name="body" placeholder="Type home header here" class="form-control" rows="12"><?php echo $pageInfo['body']; ?></textarea>
                        </div>
                        <div class="form-group pull-left">
                            <input type="submit" name="edit" class="btn btn-default" value="Edit">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" class="btn btn-default" value="Clear" onclick="$(function(){document.getElementById('homeHeader').value=''; document.getElementById('homeBody').value='';})">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


