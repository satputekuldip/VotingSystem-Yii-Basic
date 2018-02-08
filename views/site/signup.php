<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Voter */
/* @var $form ActiveForm */
?>
<div class="site-signup">
    <div class="col-lg-8" style="width: 70%">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'UID') ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'middle_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'contact_no') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'state_id') ?>
        <?= $form->field($model, 'dist_id') ?>
        <?= $form->field($model, 'city_id') ?>
        <?= $form->field($model, 'address1') ?>
        <?= $form->field($model, 'address2') ?>
        <?= $form->field($model, 'pincode') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div><!-- site-signup -->
