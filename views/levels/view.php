<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Levels */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="levels-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'level_name',
            'number_rooms',
            'current_safety',
            'current_security',
            'current_productivity',
            [
                'attribute' => 'image',
                'value' => 'https://localhost/yii2_project/web/uploads/level/'.$model->image, 
                'format' => ['image',['width'=>'200', 'height' => '160']]
            ],
            'safety_feature',
            'security_feature',
            'material_floor',
            'building_id',
            'institution_id',
            'createdAt',
            'updatedAt',
            'deleted_at',
        ],
    ]) ?>

</div>
