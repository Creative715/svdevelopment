<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

  <div style="height: 1000px;" class="col-md-12">
  <h1 class="text-center"><?= Html::encode($pagesen->title) ?></h1>
	    <hr class="hr_orange">
    <?=$pagesen->content?>
    
    </div>
    </div>




