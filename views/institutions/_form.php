<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Country;
use app\models\Province;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Institutions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institutions-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput() ?>  

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_code')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->dropDownList(
    	ArrayHelper::map(Country::find()->all(),'id','country'),
    	[
            'prompt'=>'Select Country',
            'onchange'=>'
                $.post("index.php?r=province/lists&id='.'"+$(this).val(),function(data)
                { $("select#institutions-province" ).html(data);
                });

                $.post("index.php?r=country/lists&id='.'"+$(this).val(),function(data)
                { $("#institutions-country_code" ).val(data);
                });'
        ]
    ); ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->dropDownList(
    	ArrayHelper::map(Province::find()->all(),'id','province'),
    	[
            'prompt'=>'Select Province',
        ]
    ) ?>

    <?= $form->field($model, 'current_safety')->textInput() ?>

    <?= $form->field($model, 'current_security')->textInput() ?>

    <?= $form->field($model, 'current_usage')->textInput() ?>

    <?= $form->field($model, 'current_value')->textInput() ?>

    <?= $form->field($model, 'number_building')->textInput() ?>

    <?= $form->field($model, 'number_level')->textInput() ?>

    <?= $form->field($model, 'number_room')->textInput() ?>

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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<< JS
$('#country').change(function(){
	var country = $(this).val();
 
	$.get('index.php?r=country/get-country_code',{ countryId : countryId },function(data){
		var data = $.parseJSON(data);
		$('#institutions-country_code').attr('value',data.country_code);
	});
});
 
JS;
$this->registerJs($script);
?>