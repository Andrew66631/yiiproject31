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
use yii\helpers\ArrayHelper;
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
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['index', 'view','create','update','search'],
                'formats' => ['application/json' =>Response::FORMAT_JSON,],

            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'=>['get'],
                    'view'=>['get'],
                    'create'=>['post'],
                    'update'=>['PUT'],
                    'delete' => ['delete'],
                    'deleteall'=>['post'],
                    'search'   => ['get']
                ],

            ]
        ];
    }
}
?>