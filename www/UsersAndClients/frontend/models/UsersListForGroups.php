<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class UsersListForGroups extends ActiveRecord
{
    public static function tableName()
    {
        return 'usersListForGroups';
    }

    public function getUsers()
    {
        return $this->hasOne(Users::class, ['id' => 'users_id']);
    }

    public function getUsersGroups()
    {
        return $this->hasOne(UsersGroups::class, ['id' => 'usersGroups_id']);
    }
}