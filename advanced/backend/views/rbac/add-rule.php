<?php
?>
<form action="?r=rbac/rule-add" method="post">
    <table>
        <tr>
            <td>添加角色</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>请选择用户</td>
            <td><select name="login_id" >
                    <option value="0">请选择</option>
                    <?php
                        foreach ($data as $k=>$v)
                        {
                    ?>
                            <option value="<?php echo $v['id']?>"><?php echo $v['username']?></option>
                   <?php        
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" /></td>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
