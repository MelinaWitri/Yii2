<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LevelsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="levels-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'level_name') ?>

    <?= $form->field($model, 'number_rooms') ?>

    <?= $form->field($model, 'current_safety') ?>

    <?= $form->field($model, 'current_security') ?>

    <?php // echo $form->field($model, 'current_productivity') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'safety_feature') ?>

    <?php // echo $form->field($model, 'security_feature') ?>

    <?php // echo $form->field($model, 'material_floor') ?>

    <?php // echo $form->field($model, 'building_id') ?>

    <?php // echo $form->field($model, 'institution_id') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
