<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\DivisionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Divisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisions-index"> 

<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="pull-right">
            <?= Html::button(' Create Divisions', ['value'=>Url::to('index.php?r=divisions/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
            </div>
        </div>
        <div class="box-body">
 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
        Modal::begin([
                'header'=>'<h4>Divisions</h4>',
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
            'div_name',
            'div_desc',
            'institution_id',
            'dep_id',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
