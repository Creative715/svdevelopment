<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\internal\models\Servicesen */

$this->title = 'Create Servicesen';
$this->params['breadcrumbs'][] = ['label' => 'Servicesens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicesen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
