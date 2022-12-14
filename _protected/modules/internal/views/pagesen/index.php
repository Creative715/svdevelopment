<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\internal\models\PagesenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pagesens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagesen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pagesen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'anounce',
            //'content:ntext',
            'description',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{update} {delete}', 
            ],
        ],
    ]); ?>
</div>
