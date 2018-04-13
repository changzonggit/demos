<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class ManagerController extends Controller
{
	public $layout=false;
	public function  actionManagerlist(){
		return $this->render('managerlist');

	}
	public function  actionRole(){
		return $this->render('role');

	}
	public function  actionQuanxian(){
		return $this->render('quanxian');

	}
	public function actionRoleadd()
	{
		return $this->render('roleadd');

	}
	public function actionRoleedit(){

		return $this->render('roleedit');
	}


	public function actionQuanxianadd(){
		return $this->render('quanxianadd');

	}
	public function actionAdminadd(){
		return $this->render('adminadd');
	}
	public function actionAdminedit()
	{
		return $this->render('adminedit');
	}
}
 ?>