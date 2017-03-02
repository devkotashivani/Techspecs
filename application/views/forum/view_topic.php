<div class="content">
    <?php if(empty($posts))
    {?>
        <a href="<?= site_url('forums/createTopic');?>" class="pull-right">Create New Topic</a>
    <?php }
    else
    {
     ?>
        <table class="table-striped" width="80%" border="0" cellspacing="5">
            <tr>
                <th>S.N</th>
                <th>TOPIC</th>
                <th>VIEWS</th>
                <th>REPLIES</th>
                <th>DATE</th>
            </tr>
            <?php
                foreach($posts as $x=>$item)
                {
                   $date=new DateTime();
                   $date->setTimestamp((int)$item['datetime']);
                   $d=date_format($date, "d M Y, h:i:s a");
                    $url=site_url("forums/viewTopics/{$item['id']}");
                   echo "<tr>
                            <td>$sn</td>
                            <td><a href='{$url}'>{$item['topic']}</a></td>
                            <td>{$item['view']}</td>
                            <td>{$item['reply']}</td>
                            <td>$d</td>
                        </tr>";
                    $sn++;
                }
            ?>
            <tr>
                <th colspan="2">Page: <?=$pages?></th>
                <th colspan="3"><a href="<?= site_url('forums/createTopic');?>" class="pull-right">Create New Topic</a></th>
            </tr>
        </table>

    <?php }?>
</div>


