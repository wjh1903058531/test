<?php
namespace backend\controllers;
use Yii;
use backend\models\Account;
class AccountController extends SelfController{
    /*
     * 账号的注册
     * */
    public function actionIndex(){
        return $this->render('index');
    }
    /**
     * 注册方法
     */
    public function actionAdd(){
        $data=Yii::$app->request->post();
//        =Yii::$app->request->post('account','');
//        $password=Yii::$app->request->post('password','');
//        $username=Yii::$app->request->post('username','');
//        $card=Yii::$app->request->post('card','');
        if ($data['account']===''){
            $this->result=array(
              'code'=>'1001',
                'error'=>'the account is empty'
            );
            return json_encode($this->result);
        }
        if ($data['password']===''){
            $this->result=array(
                'code'=>'1002',
                'error'=>'the password is empty'
            );
            return json_encode($this->result);
        }
        if ($data['username']===''){
            $this->result=array(
                'code'=>'1003',
                'error'=>'the username is empty'
            );
            return json_encode($this->result);
        }
        if ($data['card']===''){
            $this->result=array(
                'code'=>'1004',
                'error'=>'the card is empty'
            );
            return json_encode($this->result);
        }
        if (Account::add($data)){
            $this->result=array(
                'code'=>'200',
                'error'=>'0',
                'data'=>'success'
            );
            //这是成功后返回接口的
           // return json_encode($this->result);
            return $this->redirect(['login/login']);
        }


    }

}