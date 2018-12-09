<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>角色管理 - 条纹表格</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-striped">
    <caption>条纹表格布局</caption>
    <thead>
    <tr>
        <th>角色名称</th>
        <th>用户</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($data as $k=>$v)
        {
    ?>
            <tr>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['username']?></td>
                <td>
                    <a href="?r=rbac/add-power&rule_id=<?php echo $v['id']?>">为此角色赋权限</a>
                    <a href="?r=rbac/rule-del&rule_id=<?php echo $v['id']?>">删除</a>||
                    <a href="?r=rbac/rule-up&rule_id=<?php echo $v['id']?>">修改</a>
                </td>
            </tr>
    <?php
        }
    ?>


    </tbody>
</table>

</body>
</html>
