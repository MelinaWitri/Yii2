<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Institutions;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dep_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_code')->textInput() ?>

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
