<?php

namespace app\models;

use yii\db\ActiveRecord;

class acl_users extends ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name'], 'character varying(40)'],
        ];
    }
}