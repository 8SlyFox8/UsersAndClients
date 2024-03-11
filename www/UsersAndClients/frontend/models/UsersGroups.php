<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class UsersGroups extends ActiveRecord
{
    public static function tableName()
    {
        return 'usersGroups';
    }
}