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

    public function actionIndex()
    {
        public $modelClass = 'app\models\acl_users';
        $hi = 'Контроллер успешно отрабатывает';
        return $this->render('index',
            [
                'hi' => $hi,
            ]
        );
    }
}
?>

