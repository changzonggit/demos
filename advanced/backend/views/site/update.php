<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['action' => ['demo/update'],'method'=>'post']);?>

	<? foreach ($data as $value):?>

	    <?= Html::hiddenInput('id',$value['id'],['class' => 'form-control']);?>
	    <?= "name".Html::textInput('username',$value['username'],['class' => 'form-control']);?>
	    <?= "sex".Html::textInput('sex',$value['sex'],['class' => 'form-control']);?>
	    
	<? endforeach; ?>

<?= Html::submitButton('修改', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>