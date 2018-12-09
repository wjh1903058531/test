<?php
namespace backend\controllers;

use yii\web\Controller;
use Yii;
class SelfController extends Controller{

    protected $result=array(
      'code'=>'200',
        'data'>'',
        'error'=>''
    );

    public function init(){
        //判断用户是否登录，
        //如果登录后运行是否有权限，
        //若未登陆则让用户登录

    }
}