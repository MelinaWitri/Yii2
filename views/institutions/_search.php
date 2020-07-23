<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InstitutionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institutions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'telephone') ?>

    <?= $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'current_safety') ?>

    <?php // echo $form->field($model, 'current_security') ?>

    <?php // echo $form->field($model, 'current_usage') ?>

    <?php // echo $form->field($model, 'current_value') ?>

    <?php // echo $form->field($model, 'number_building') ?>

    <?php // echo $form->field($model, 'number_level') ?>

    <?php // echo $form->field($model, 'number_room') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
