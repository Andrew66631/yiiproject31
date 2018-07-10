<?php 
namespace app\controllers;
use app\models\acl_users;
use yii\rest\ActiveController;
class MyController extends ActiveController
{
    public $modelClass = 'app\models\acl_users';
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