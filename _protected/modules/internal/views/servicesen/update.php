<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\internal\models\Servicesen */

$this->title = 'Update Servicesen: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Servicesens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servicesen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
