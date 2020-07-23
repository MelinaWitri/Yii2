<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\LevelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Levels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="levels-index">

<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="pull-right">
            <?= Html::button(' Create Levels', ['value'=>Url::to('index.php?r=levels/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
            </div>
        </div>
        <div class="box-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
        Modal::begin([
                'header'=>'<h4>LEvels/h4>',
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
            'level_name',
            'number_rooms',
            'current_safety',
            'current_security',
            //'current_productivity',
            //'image',
            //'safety_feature',
            //'security_feature',
            //'material_floor',
            //'building_id',
            //'institution_id',
            //'createdAt',
            //'updatedAt',
            //'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
