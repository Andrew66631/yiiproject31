<?php 
namespace app\controllers;
use app\models\acl_users;
use yii\rest\ActiveController;

class MyController extends ActiveController
{
	public $modelClass = 'app\models\User';
	public function actionMy()
    {
        $model=new acl_users();
        return $this->render('my', [
            'model' => $model,
        ]);
    }
}
?>

