<?php
namespace backend\controllers;

class IndexController extends SelfController
{

    /*
     * 后台页面
     * */

    public $layout = 'common';
    public function actionIndex(){

        return $this->render('index');
    }
}