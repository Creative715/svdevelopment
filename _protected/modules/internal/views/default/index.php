<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Административная часть сайта';
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>
<br/><br/>
    <p>
        <h3 class="text-center"><a class="btn btn-danger btn-block" href="<?=  yii\helpers\Url::to(['/internal/pagesen'])?>">Редактировать страницы EN</a></h3>
    </p>
        <hr/>
        <p>
        <h3 class="text-center"><a class="btn btn-danger btn-block" href="<?=  yii\helpers\Url::to(['/internal/pages'])?>">Редактировать страницы RU</a></h3>
    </p>
        <hr/>
        <p>
        <h3 class="text-center"><a class="btn btn-danger btn-block" href="<?=  yii\helpers\Url::to(['/internal/servicesen'])?>">Редактировать услуги EN</a></h3>
    </p>
        <hr/>
        <p>
        <h3 class="text-center"><a class="btn btn-danger btn-block" href="<?=  yii\helpers\Url::to(['/internal/services'])?>">Редактировать услуги RU</a></h3>
    </p>
        <hr/>
    <p>
        
    
