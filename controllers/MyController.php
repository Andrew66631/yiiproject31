<?php 
namespace app\controllers;
use app\models\acl_users;
use yii\rest\ActiveController;

class MyController extends ActiveController
{
    //public $modelClass = 'app\models\acl_users';
    /*public function actionMy()
    {
        $model=new acl_users();
        return $this->render('my', [
            'model' => $model,
        ]);
    }*/
    public $modelClass = 'app\models\acl_users';
    public function actionIndex()
    {

        $hi = 'Контроллер успешно отрабатывает';
        return $this->render('index',
            [
                'hi' => $hi,
            ]
        );
    }
}
?>

