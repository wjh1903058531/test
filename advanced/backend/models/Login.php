<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ad".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 */
class Login extends \yii\db\ActiveRecord
{

    //检验密码和账号
    static public function CheckAccount($account,$password){
        $password=md5($password);
        $sql="select uid from account where(account='$account' and password='$password')";
        $x=Yii::$app->db->createCommand($sql)->queryAll();
        if ($x)
        {
            $uid=$x[0]['uid'];

            return $uid;
        }
    }
    /**
        获取用户基本信息
     */
    static public function getUserInfo($id){
        $sql="select username,sex,age from login where id='$id'";
        $x=Yii::$app->db->createCommand($sql)->queryAll();
        if ($x)
        {
            return $x;
        }
        else
        {
            return json_encode(array(
                'code'=>'1006',
                'error'=>'获取信息失败'
            ));
        }
    }
    /*
     * 获取全部信息
     * */
    static  public function getUserData(){
        $sql="select id,username from login";
        $x=Yii::$app->db->createCommand($sql)->queryAll();
            return $x;

    }


}
