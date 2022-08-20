<?php

namespace app\modules\ru\controllers;
use yii\web\Controller;

class AppController extends Controller{

    protected function setMeta($title = null,  $description = ""){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }

} 