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
class Power extends \yii\db\ActiveRecord
{

    //调用表中所有的数据的方法
    static public function getData(){
        $sql="select * from power";
        $data=Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }
    /**
     * 调用model中添加权限的数据库操作
    */
    public function add($data){
        $name=$data['name'];
        $url=$data['url'];
        $rule_id=$data['rule_id'];
        $sql="insert into power (name,url,rule_id) VALUES('$name','$url','$rule_id')";
        $result=Yii::$app->db->createCommand($sql)->execute();
        if ($result)
        {
            return true;
        }
    }


}
