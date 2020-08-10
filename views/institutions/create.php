<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Institutions */

$this->title = 'Create Institutions';
$this->params['breadcrumbs'][] = ['label' => 'Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="institutions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) 
    
    ?>

</div>
