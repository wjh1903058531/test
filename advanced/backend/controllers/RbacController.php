<?php
namespace backend\controllers;

use Yii;
use backend\models\Rule;
use backend\models\Login;
use backend\models\Power;
class RbacController extends SelfController
{
    //角色管理
    public function actionRule(){
        $rule=new Rule();
        $data=$rule::getData();
        return $this->render('rule',['data'=>$data]);
    }
    //添加角色的方法
    public function actionAddRule(){

        $login=new Login();
        $data=$login::getUserData();
        return $this->render('add-rule',['data'=>$data]);
    }
    //添加角色
    public function actionRuleAdd(){
        $name=Yii::$app->request->post('name');
        $login_id=Yii::$app->request->post('login_id');
        $rule=new Rule();
        $res=$rule::addRule($name,$login_id);
        if ($res)
        {
            return $this->redirect(['rbac/add-power']);
        }$rule=new Rule();
    }

    //为角色分配权限
    public function actionAddPower(){
        $id=Yii::$app->request->get('rule_id');
        $rule=new Rule();
        $data=$rule::getOne($id);
        //获取id,通过id分配给他所拥有的权限
        return $this->render('add-power',['data'=>$data]);
    }
    //分配权限
    public function actionPowerAdd(){
        $data=Yii::$app->request->post();
        $power=new Power();
        $res=$power::add($data);
        if ($res)
        {
            return $this->redirect(['rbac/power']);
        }

    }
    //权限展示
    public function actionPower(){
        $power=new Power();
        $data=$power::getData();
        return $this->render('power',['data'=>$data]);
    }

}