<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class IndexController extends Controller
{
	public $layout=false;
	public function actionIndex(){

		return $this->render('index');


	}
	public function actionWelcome(){
		return $this->render('welcome');

	}



	public function actionArticlelist(){
		return $this->render('articlelist');
	}

	public function actionGongchenglist(){
		return $this->render("gongchenglist");

	}

	public function actionLiuyanlist(){
		return $this->render('liuyanlist');

	}


	public function actionRole(){
		return $this->render('role');


	}

public function actionQuanxian(){
		return $this->render('quanxian');


	}


	public function actionManagerlist(){

		return $this->render('managerlist');

	}
	public function actionDaohanglist(){

		return $this->render('daohanglist');

	}

}