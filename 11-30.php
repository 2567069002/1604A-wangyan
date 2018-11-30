<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
    <script src="layer/mobile/layer.js"></script>
    <script src="layer/mobile/need/layer.css"></script>
    <script src="layer/layer.js"></script>
    <script src="layer/theme/default/layer.css"></script>
</head>
<body>
<table align="center" border="1">
    <tr>
        <th>ID</th>
        <th>账号</th>
        <th>密码</th>
        <th>操作</th>
    </tr>
    <tr id="a">
        <td>1</td>
        <td>wangyan</td>
        <td>123456</td>
        <td>
            <button>删除</button>
        </td>
    </tr>
</table>
</body>
</html>
<script type="text/javascript">
    $('button').click(function () {
        layer.msg('你确定要删除吗', {
            time: 0 //不自动关闭
            ,btn: ['确定', '不确定']
            ,yes: function(index){
                layer.close(index);
                layer.msg('删除成功', {
                    icon: 6,
                    // $('#a').hide();
                });
                $('#a').hide();
            }
        });
    })
</script>