<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

  <div style="min-height: 900px;" class="col-md-12">
  <h1 class="text-center"><?= Html::encode($pages->title) ?></h1>
	    <hr class="hr_orange">
    <?=$pages->content?>
    
    </div>
    </div>




