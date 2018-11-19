<?php
use yii\widgets\LinkPager;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章列表</title>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<form action="index.php?r=news/list" method="post">
    <input type="text" name="so">
    <input type="submit" value="搜索" class="btn btn-success btn-sm">
</form>
<table class="table">
    <tr>
        <th>编号</th>
        <th>标题</th>
        <th>内容</th>
        <th>发布时间</th>
        <th>操作</th>
    </tr>
    <?php foreach($data as $k => $v) { ?>
        <tr>
            <td><?=$v['id']?></td>
            <td><?=$v['title']?></td>
            <td><?=$v['coment']?></td>
            <td><?=$v['addtime']?></td>
            <td>
                <button value="<?=$v['id']?>" class="btn btn-success btn-sm">删除</button>
            </td>
        </tr>
    <?php } ?>
</table>
<?php
echo LinkPager::widget(['pagination' => $pages]);
?>
</body>
</html>
<script type="text/javascript">
    $('button').click(function(){
        var id = $(this).val();
        $.ajax({
            'url': 'index.php?r=news/del',
            'type': 'post',
            'data': {id:id}
            success:function (msg) {
                if (msg==1){
                    alert('删除成功');
                }else{
                    alert('删除失败');
                }
            }
        })
    })
</script>