<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\internal\models\ServicesenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicesens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicesen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Servicesen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'content:ntext',
            'description',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{update} {delete}', 
            ],
        ],
    ]); ?>
</div>
