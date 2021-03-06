<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Institutions */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="institutions-view">

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
            'name',
            [
                'attribute' => 'logo',
                'value' => 'https://localhost/yii2_project/web/uploads/'.$model->logo, 
                'format' => ['image',['width'=>'200', 'height' => '160']]
            ],
            'telephone',
            'fax',
            'email:email',
            'postal_code',
            'address',
            'country',
            'country_code',
            'province',
            'current_safety',
            'current_security',
            'current_usage',
            'current_value',
            'number_building',
            'number_level',
            'number_room',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
