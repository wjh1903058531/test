<?php
?>
<form action="?r=account/add" method="post">
    <table>
        <tr>
            <td>账号</td>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>身份证号</td>
            <td><input type="text" name="card"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" /></td>
            <td><input type="submit" value="注册"></td>
        </tr>
    </table>
</form>
