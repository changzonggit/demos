<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
/*
 *lagou 公司  
 */
class CompController extends Controller{
    public $layout = false;
    public function actionIndex(){
        return $this->render('companylist');
    }
    //
    public function actionMyhome(){
    	return $this->render('myhome');
    }
}
?>