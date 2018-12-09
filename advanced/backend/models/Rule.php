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
class Rule extends \yii\db\ActiveRecord
{

    //调用表中所有的数据的方法
    static public function getData(){
        $sql="select * from rule LEFT JOIN login on login.id=rule.login_id";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }
    /**
     * 添加角色
     */
    static public function addRule($name,$login_id){
        $sql="insert into rule (name,login_id) VALUES ('$name','$login_id')";
        $result=Yii::$app->db->createCommand($sql)->execute();
        if ($result)
        {
            return true;
        }
    }
    /*
    *调用表中一条数据
    */

    static public function getOne($id){
        $sql="select id,name from rule where id='$id'";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }

}
