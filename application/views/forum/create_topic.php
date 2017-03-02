<a href="<?=site_url('forums')?>" class="pull-right" style="margin-top:20px;margin-right:20px;"><img height="50px" width="50px" src="<?=base_url().'images/icons/back.ico'?>"></a>
<div class="panel panel-default col-lg-offset-3 col-lg-6" style="margin-top:10px;margin-bottom: 10px;">
    <div class="panel-heading">
        <strong>Create New Topic</strong>
    </div>
    <div class="panel-body"></div>
    <form action="<?=site_url('forums/addTopic')?>" method="post" name="frmCreateTopic">
        <div class="form-group">
            <label for="topic"><strong>Topic</strong>:</label>
        <input class="form-control" name="topic" type="text" id="topic" required />
        </div>
        <div class="form-group">
            <label for="detail"><strong>Detail</strong>:</label>
        <textarea class="form-control" name="detail" rows="3" id="detail" required></textarea>
        </div>
        <div class="form-group">
            <label for="name"><strong>Name</strong>:</label>
        <input class="form-control" name="name" type="text" id="name" required />
        </div>
        <div class="form-group"><label for="email"><strong>Email</strong>:</label>
        <input class="form-control" name="email" type="email" id="email" required/>
        </div>
        <div class="form-group">
            <input class="btn btn-default" type="submit" name="Submit" value="Submit" />
            <input class="btn btn-default" type="reset" name="Submit2" value="Reset" />
        </div>
    </form>
</div>

