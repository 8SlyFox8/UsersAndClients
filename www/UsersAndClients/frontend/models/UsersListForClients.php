<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class UsersListForClients extends ActiveRecord
{
    public static function tableName()
    {
        return 'usersListForClients';
    }

    public function getUsers()
    {
        return $this->hasOne(Users::class, ['id' => 'users_id']);
    }

    public function getClients()
    {
        return $this->hasOne(Clients::class, ['id' => 'clients_id']);
    }

    public function getUsersListForGroups()
    {
        return $this->hasOne(UsersListForGroups::class, ['id' => 'usersListForGroups_id']);
    }
}