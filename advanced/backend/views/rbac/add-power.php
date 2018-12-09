<?php
?>
<form action="?r=rbac/power-add" method="post">
    <table>
        <tr>
            <td>权限名称</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>请选择角色</td>
            <td><select name="rule_id" >
                    <option value="0">请选择</option>
                    <?php
                    foreach ($data as $k=>$v)
                    {
                        ?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>权限所对应控制器和方法</td>
            <td><input type="text" name="url"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" /></td>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>

