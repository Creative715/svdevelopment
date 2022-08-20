<?php

namespace app\modules\ru\controllers;

use yii\web\Controller;
use app\modules\ru\models\Pages;
use app\modules\ru\models\Services;

/**
 * Default controller for the `ru` module
 */
class DefaultController extends AppController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
       $pages = Pages::find()->select('id, title, anounce')->all();          
       $services = Services::find()->select('id, title, description')->all();     
        
       return $this->render('index', compact('pages','services'));
    }
    
    public function actionUslugi($id) {
        	
        $id = \Yii::$app->request->get('id');
        $services = Services::findOne($id);
        $this->setMeta('' . $services->title, $services->description);
        return $this->render('uslugi', compact('services'));
        
    }
    
     public function actionOnas()
    {
        $pages = Pages::find()->where(['id' => '1'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
        public function actionTzotzakaz()
    {
        $pages = Pages::find()->where(['id' => '2'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
        public function actionElektroschema()
    {
        $pages = Pages::find()->where(['id' => '3'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
        public function actionPrincschema()
    {
        $pages = Pages::find()->where(['id' => '4'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
        public function actionKonstrrabmack()
    {
        $pages = Pages::find()->where(['id' => '5'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
        public function actionRazprogob()
    {
        $pages = Pages::find()->where(['id' => '6'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
        public function actionRazwebint()
    {
        $pages = Pages::find()->where(['id' => '7'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
        public function actionSdachakr()
    {
        $pages = Pages::find()->where(['id' => '8'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
        public function actionKomleksnaiaraz()

    {
        $pages = Pages::find()->where(['id' => '9'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
     public function actionKontakty()
    {
        $pages = Pages::find()->where(['id' => '10'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
    public function actionUdaluprav()
    {
        $pages = Pages::find()->where(['id' => '11'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
    public function actionWebinterface()
    {
        $pages = Pages::find()->where(['id' => '12'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    public function actionDesignsites()
    {
        $pages = Pages::find()->where(['id' => '13'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    public function actionPechatplat()
    {
        $pages = Pages::find()->where(['id' => '14'])->one();
        $this->setMeta('' . $pages->title, $pages->description);            
        return $this->render('page', compact('pages'));
    }
    
    
}

