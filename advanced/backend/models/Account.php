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
class Account extends \yii\db\ActiveRecord
{
    //添加的操作
    public static function add(array &$data){
        $username=$data['username'];
        $card=$data['card'];
        $account=$data['account'];
        $password=md5($data['password']);
        $time=time();

        try{
            $transaction=Yii::$app->db->beginTransaction();
            $sql1="insert into login (username,card,create_time) VALUES ('$username','$card','$time')";
            $a=Yii::$app->db->createCommand($sql1)->execute();
            $id=Yii::$app->db->getLastInsertID('login');
            $sql2="insert into account (account,password,uid,create_time,status) VALUES ('$account','$password','$id','$time','1')";
            $b=Yii::$app->db->createCommand($sql2)->execute();
            $transaction->commit();//提交事务会真正的执行数据库操作
        }catch (Exception $e) {
            $transaction->rollback();//如果操作失败, 数据回滚
        }
        return true;
    }
}
