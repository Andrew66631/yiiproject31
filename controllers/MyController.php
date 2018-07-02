<?php 
namespace app\controllers;
use yii\web\controller;

class MyController extends Controller
{

	public function actionMy($message='Привет')
	{
		return $this->render('my',['message'=>$message]);
	}
}
?>
