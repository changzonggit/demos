<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class DaohangController extends Controller
{
	public $layout=false;
	public function  actionIndex(){
		return $this->render('index');

	}
	public function actionAdd(){
		return $this->render('add');

	}
	public function actionEdit(){
		return $this->render('edit');
	}
}
 ?>