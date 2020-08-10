<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Institutions;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Levels */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="levels-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'level_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_rooms')->textInput() ?>

    <?= $form->field($model, 'current_safety')->dropDownList(
        ArrayHelper::map(Institutions::find()->all(),'id','current_safety'),
        ) ?>
  
    <?= $form->field($model, 'current_security')->dropDownList( 
        ArrayHelper::map(Institutions::find()->all(),'id','current_security'),
        ) ?>
    

    <?= $form->field($model, 'current_productivity')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'safety_feature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'security_feature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_floor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'building_id')->textInput() ?>

    <?= $form->field($model, 'institution_id')->dropDownList( 
        ArrayHelper::map(Institutions::find()->all(),'id','id'),
        ) ?>

    <?= $form->field($model, 'createdAt')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
]);?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
