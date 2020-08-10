<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstitutionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Institutions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institutions-index">

<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="pull-right">
            <?= Html::button(' Create Institutions', ['value'=>Url::to('index.php?r=institutions/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
            </div>
        </div>
        <div class="box-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
        Modal::begin([
                'header'=>'<h4>Institution</h4>',
                'id'=>'modal',
                'size'=>'modal-lg',
            ]);
            
        echo "<div id='modalContent'></div>";

        Modal::end();
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'logo',
            'telephone',
            'fax',
            //'email:email',
            //'postal_code',
            //'address',
            //'country',
            //'country_code',
            //'province',
            //'current_safety',
            //'current_security',
            //'current_usage',
            //'current_value',
            //'number_building',
            //'number_level',
            //'number_room',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
