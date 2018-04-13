<?php 
namespace backend\controllers;
use Yii;
use yii\web\controller;
/*
  lagou 简历
 */
class JianliController extends Controller{
	public $layout = false;
	public function actionIndex(){
		return $this->render('jianli');
	}
	public function actionDelivery(){
		return $this->render('delivery');
	}
}
?>