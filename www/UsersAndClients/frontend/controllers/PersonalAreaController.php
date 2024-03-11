<?php

namespace frontend\controllers;

use frontend\models\Clients;
use frontend\models\Users;
use frontend\models\UsersGroups;
use frontend\models\UsersListForGroups;
use Yii;
use yii\web\Controller;

class PersonalAreaController extends Controller
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

        $currentId = Users::find()->where(['email' => $userEmail])->one()->id;

        return $this->render(
            'personalArea',
            compact('currentId')
        );
    }

    public function addNewUser($usersRequest): void
    {
        $user = new Users();
        $user->email = $usersRequest['Users']['email'];
        $user->name = $usersRequest['Users']['name'];
        $user->password = $usersRequest['Users']['password'];
        $user->save();
    }

    public function actionAddNewClient()
    {
        $clientsRequest = Yii::$app->request->post();
        $currentId = Yii::$app->request->get()['currentId'];

        $client = new Clients();
        $client->name = $clientsRequest['Clients']['name'];
        $client->save();

        return $this->render(
            'personalArea',
            compact('currentId')
        );
    }

    public function actionAddNewGroup()
    {
        $usersGroupRequest = Yii::$app->request->post();
        $currentId = Yii::$app->request->get()['currentId'];

        $usersGroup = new usersGroups();
        $usersGroup->name = $usersGroupRequest['UsersGroups']['name'];
        $usersGroup->save();

        return $this->render(
            'personalArea',
            compact('currentId')
        );
    }

    public function actionJoinGroup()
    {
        $usersListForGroupRequest = Yii::$app->request->post();
        $currentId = Yii::$app->request->get()['currentId'];

        $usersListForGroup = new UsersListForGroups();
        $usersListForGroup->users_id = $currentId;
        $usersListForGroup->usersGroups_id = $usersListForGroupRequest['UsersGroups']['id'];
        $usersListForGroup->save();

        return $this->render(
            'personalArea',
            compact('currentId')
        );
    }
}