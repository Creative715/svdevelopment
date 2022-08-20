<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Pagesen;
use app\models\Servicesen;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function beforeaction($action){
    $absoluteUrl = Yii::$app->request->absoluteUrl;
    if ((strpos($absoluteUrl, 'index.php') !== false)) {
        $scriptUrl = Yii::$app->request->scriptUrl;
        $new_url = str_replace($scriptUrl, "/", $absoluteUrl);  
        $this->redirect($new_url, 301);
    }
    return true;
    }
    public function actionIndex()
    {
        
       $pagesen = Pagesen::find()->select('id, title, anounce')->all();          
       $servicesen = Servicesen::find()->select('id, title, description')->all();     
        
       return $this->render('index', compact('pagesen','servicesen'));
    }

    public function actionServices($id) {
        	
        $id = \Yii::$app->request->get('id');
        $servicesen = Servicesen::findOne($id);
        $this->setMeta('' . $servicesen->title, $servicesen->description);
        if(empty($servicesen)) throw new \yii\web\HttpException(404, 'We hav no those service )');
        return $this->render('services', compact('servicesen'));
        
    }

//--Pagesen--//


    public function actionAboutus()
    {
        $pagesen = Pagesen::find()->where(['id' => '1'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
        public function actionTtcastom()
    {
        $pagesen = Pagesen::find()->where(['id' => '2'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
        public function actionDevelektrichart()
    {
        $pagesen = Pagesen::find()->where(['id' => '3'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
        public function actionDevfundchart()
    {
        $pagesen = Pagesen::find()->where(['id' => '4'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
        public function actionConstrworklay()
    {
        $pagesen = Pagesen::find()->where(['id' => '5'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
        public function actionDevprogprov()
    {
        $pagesen = Pagesen::find()->where(['id' => '6'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
        public function actionDevwebinterface()
    {
        $pagesen = Pagesen::find()->where(['id' => '7'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
        public function actionHandcompdec()
    {
        $pagesen = Pagesen::find()->where(['id' => '8'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
        public function actionComplexdev()
    {
        $pagesen = Pagesen::find()->where(['id' => '9'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
     public function actionContact()
    {
        $pagesen = Pagesen::find()->where(['id' => '10'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
    public function actionRemotecontrol()
    {
        $pagesen = Pagesen::find()->where(['id' => '11'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
    
    
    public function actionWebinterfaces()
    {
        $pagesen = Pagesen::find()->where(['id' => '12'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
    public function actionSitesdesign()
    {
        $pagesen = Pagesen::find()->where(['id' => '13'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
    public function actionPlanningpcbs()
    {
        $pagesen = Pagesen::find()->where(['id' => '14'])->one();
        $this->setMeta('' . $pagesen->title, $pagesen->description);            
        return $this->render('page', compact('pagesen'));
    }
    
    
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
  
}
