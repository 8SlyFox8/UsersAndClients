<?php

namespace frontend\controllers;

use backend\models\Users;
use Yii;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionLogin()
    {
        $usersRequest = Yii::$app->request->post();

        $userEmail = $usersRequest['Users']['email'];
        $user = Users::find()->where(['email' => $userEmail])->one();

        $userPassword = $usersRequest['Users']['password'];
        if(isset($user) && $user->password != $userPassword)
        {
            return $this->render('errorPassword');
        }
        elseif (!isset($user))
        {
            $this->addNewUser($usersRequest);
        }

        return $this->render('index');
    }

    public function addNewUser($usersRequest): void
    {
        $user = new Users();
        $user->email = $usersRequest['Users']['email'];
        $user->name = $usersRequest['Users']['name'];
        $user->password = $usersRequest['Users']['password'];
        $user->save();
    }
}