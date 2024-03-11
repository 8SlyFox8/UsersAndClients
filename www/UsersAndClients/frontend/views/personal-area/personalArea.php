<?php

/** @var yii\web\View $this */

use frontend\models\Clients;
use frontend\models\UsersGroups;
use frontend\models\UsersListForGroups;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Personal Area';

$clientsModel = new Clients;
$usersGroupsModel = new UsersGroups;

$usersGroups = UsersGroups::find()->all();
$myUsersListForGroups = UsersListForGroups::find()->where(['users_id' => $currentId])->all();
?>
<div>
    <h1>Добро пожаловать!</h1>
</div>
<hr>
<p>
    Клиент
</p>
<?php $form = ActiveForm::begin(['action' => Url::to(['personal-area/add-new-client', 'currentId' => $currentId]), 'id' => 'add-new-client-form']); ?>

    <?= $form->field($clientsModel, 'name') ?>

    <div class="form-group">
        <?= Html::submitButton('Add new client', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>
<hr>
<p>
    Группы
</p>
<?php $form = ActiveForm::begin(['action' => Url::to(['personal-area/add-new-group', 'currentId' => $currentId]), 'id' => 'add-new-group-form']); ?>

    <?= $form->field($usersGroupsModel, 'name') ?>

    <div class="form-group">
        <?= Html::submitButton('Add new group', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>
<hr>
<div>
    <h1>Ваши группы</h1>
</div>
<?php foreach ($myUsersListForGroups as $myGroup): ?>
    <p>
        <?php echo $myGroup->usersGroups->name ?>
    </p>
<?php endforeach; ?>
<hr>
<p>
    Вступить в группу
</p>
<?php $form = ActiveForm::begin([
    'action' => Url::to(['personal-area/join-group', 'currentId' => $currentId]),
    'id' => 'join-group-form']
); ?>

    <?= $form->field($usersGroupsModel, 'id')->dropDownList(
            \yii\helpers\ArrayHelper::map($usersGroups, 'id', 'name')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Join group', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>
<hr>
<div>
    <h1>Все связи пользователей и клиентов</h1>
</div>