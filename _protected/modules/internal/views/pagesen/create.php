<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\internal\models\Pagesen */

$this->title = 'Create Pagesen';
$this->params['breadcrumbs'][] = ['label' => 'Pagesens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagesen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
