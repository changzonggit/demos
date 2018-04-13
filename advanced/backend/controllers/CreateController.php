<?php
namespace backend\controllers;
use Yii;
use yii\web\controller;
/*
  lagou 发布职位
 */
class CreateController extends Controller{
	public $layout = false;
	public function actionIndex(){
		return $this->render('create');
	}
	//已发布过的职位
	public function actionPositions(){
		return $this->render('positions');
	}
	//收藏的职位
	public function actionCollections(){
		return $this->render('collections');
	}
	//
	public function actionSubscribe(){
		return $this->redner('subscribe');
	}
	//
	public function actionToudi(){
		return $this->redner('toudi');
	}
}
?>