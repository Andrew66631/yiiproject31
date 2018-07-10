<?php 
namespace app\controllers;
use app\models\acl_users;
use yii\rest\ActiveController;
class MyController extends ActiveController
{
    public $modelClass = 'app\models\acl_users';
    public function actionNew()
    {

        $hi = 'Контроллер успешно отрабатывает и другие экшн';
       return $this->render('new',
            [
               'hi' => $hi,
           ]
        );
    }
}
?>