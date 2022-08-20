<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\internal\models\Pagesen */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pagesens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagesen-view">

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
       <?= Html::a('Create Pagesen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'anounce',
            'content:ntext',
            'description',
        ],
    ]) ?>

</div>
