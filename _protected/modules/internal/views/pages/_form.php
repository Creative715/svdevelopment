<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\internal\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'anounce')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[])
	
	]); ?>

    <?php echo $form->field($model, 'content')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[])
	
	]); ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
