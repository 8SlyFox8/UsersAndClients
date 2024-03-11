<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Clients extends ActiveRecord
{
    public static function tableName()
    {
        return 'clients';
    }
}