<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"/www/wwwroot/blog/application/admin/view/privates/pass.html";i:1545840273;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-</title>
    <script type="text/javascript" src="/public/static/layui/layui.js"></script><link rel="stylesheet" type="text/css" href="/public/static/layui/css/layui.css" />
</head>
<body>


<table class="layui-hide" id="test" lay-filter="test"></table>

<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
        <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
        <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
    </div>
</script>
<!--<script src="//res.layui.com/layui/dist/layui.js" charset="utf-8"></script>-->
<script>
    layui.use('table', function(){
        var table = layui.table;

        table.render({
            elem: '#test'
            ,toolbar: '#toolbarDemo'
            ,url:"<?php echo url('privates/passList'); ?>"
            ,cols: [[
                {field:'id', title:'ID', fixed: 'left', unresize: true, sort: true}
                ,{field:'title', title:'标题'}
                ,{field:'account', title:'账号', sort: true}
                ,{field:'password', title:'密码', sort: true}
                ,{field:'msg', title:'其他信息'}
                ,{field:'remarks', title:'备注'}
                // ,{field:'addTime', title:'添加', width:120}
            ]]
            ,page: true
        });

        //监听行单击事件（单击事件为：rowDouble）
        table.on('row(test)', function(obj){
            var data = obj.data;

            layer.alert(JSON.stringify(data), {
                title: '当前行数据：'
            });

            //标注选中样式
            obj.tr.addClass('layui-table-click').siblings().removeClass('layui-table-click');
        });

    });
</script>
</body>
</html>
