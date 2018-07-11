<?php
namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\acl_users;
use yii\rest\ActiveController;
class MyController extends ActiveController
{
    public $modelClass = 'app\models\acl_users';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/xml,text/xml'] = Response::FORMAT_HTML;
        return $behaviors;
    }
    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        unset($actions['view']);
        return $actions;
    }

    public function actionIndex($id)
    {
        // some code
        // check $id and etc
        return $modelClass::findOne($id);
    }
    public function actionNew()
    {

        $query=acl_users::find();
        $pagination= new Pagination([
            'defaultPageSize'=>40,
            'totalCount'=>$query->count(),
        ]);
        $users=$query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       return $this->render('new',
            [
                'users'=>$users,
                'pagination'=>$pagination,
           ]
        );
    }
}
?>