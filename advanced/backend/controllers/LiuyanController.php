<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class LiuyanController extends Controller
{
	public $layout=false;
	public function  actionIndex(){
		return $this->render('index');

	}

}
 ?>