<?php

/** @var yii\web\View $this */

use backend\models\Users;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Log in';

$usersModel = new Users;
?>
<?php $form = ActiveForm::begin(['action' => ['login/login'], 'id' => 'login-form']); ?>

    <?= $form->field($usersModel, 'email') ?>
    <?= $form->field($usersModel, 'name') ?>
    <?= $form->field($usersModel, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton('Log in', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end(); ?>
