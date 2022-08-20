<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ScriptsAppAsset;
ScriptsAppAsset::register($this);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
  <header id="header" class="header">
		<div class="container">		
		<div class="row">
	    	<!-- Logo - header left -->
	    	<div class="col-md-6">
			<a class="navbar-brand logo logo-text  animation wow fadeInUp" href="/">
			<img src="/images/logo.png" alt="" />
			<div style="padding-top: 20px">SVD - New generations Technology </div>
			</a>
			</div>

	    	<div class="col-md-6">
				

<ul class="social pull-right">
                
                <li><a href="#" class="face" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twit" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="google" title="Google +"><i class="fa fa-google-plus"></i></a></li>

            </ul>	
 
			</div>
					

		</div>	
		</div>
		</header>

    <?php
    NavBar::begin([

        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default', 'data-spy'=>'affix', 'data-offset-top' => '197',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Complex development', 'url' => ['/site/complexdev']],
            ['label' => 'Development directions', 'url' => [''], 'items' => [
            ['label' => 'Remote control units', 'url' => ['/site/remotecontrol']],
            ['label' => 'WEB interfaces', 'url' => ['/site/webinterfaces']],
            ['label' => 'Sites design', 'url' => ['/site/sitesdesign']],
            ['label' => 'Planning of PCBS', 'url' => ['/site/planningpcbs']],
            ]],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            
        ],
    ]);
    
    echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right lng'],
    'items' => [
     ['label' => 'English', 'url' => ['/site/index'], 'items' => [
            ['label' => 'Русский', 'url' => ['/ru/']],
        ]],
     
    ],
  ]);
    
    NavBar::end();
    ?>

    <div class="container-fluide">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


<footer>
<div class="container animation wow fadeInUp">
	<?= date('Y') ?> &copy; SVD - Futures Technology.
	</div>
</footer>
  <div id="scroller"><i class="far fa-arrow-alt-circle-up fa-3x btn"></i></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
  <script>new WOW().init(200);</script>	
  <script>
	jQuery('ul.nav > li').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
	}, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
	})
	</script>
      <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
      <script>
<!--
			$(document).ready(function(){   
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#scroller').fadeIn();
				} else {
					$('#scroller').fadeOut();
				}
			});
			$('#scroller').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
//-->
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
