<?php
namespace  backend\controllers;

use backend\controllers\SelfController;
use Yii;
use backend\models\Login;
class LoginController extends SelfController
{
    /*
     * 登录页面
     * */
    public $layout='login';
    public function actionLogin(){

        return $this->render('login');
    }
    /*
     * 登录方法
     * */
    public function actionDenglu(){
        //登录内容
        $account=Yii::$app->request->post('account');
        //登录密码
        $password=Yii::$app->request->post('password');

        $login=new Login();
        $uid=$login::CheckAccount($account,$password);


        if ($uid)
        {
            //判断是否多端登录
            if (Yii::$app->redis->get('user_'.$uid))
            {
                $tokenKey=Yii::$app->redis->get('user_'.$uid);
                Yii::$app->redis->del('user_'.$uid);
                Yii::$app->redis->del($tokenKey);
            }
            //通过UID获取到用户基本信息
            $data=$login::getUserInfo($uid);
           $arr=$data[0];
           $arr['uid']=$uid;
           $arr=json_encode($arr);

           //获取token
            $tokenKey="@#%".time()."wangjianhong";
            $tokenKey=md5($tokenKey);
            //将token存入redis中
            Yii::$app->redis->set('user_'.$uid,$tokenKey);
            Yii::$app->redis->set($tokenKey,$arr);
            return $this->redirect(['index/index']);
        }
    }


}