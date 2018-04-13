<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['action' => ['site/add'],'method'=>'post']);?>

    <?= $form->field($model, 'goods')->textInput(); ?>
	
	<?= $form->field($model, 'goods_number')->textInput(); ?>

	<?= $form->field($model, 'goods_type')->dropDownList(['点击请选择','游戏类','火锅类','跳伞类']);  ?>

	<?= $form->field($model, 'good_brand')->dropDownList(['点击请选择','开心品牌','快乐品牌','大悲品牌']); ?>

	<?= $form->field($model, 'goods_shelves')->radioList(['1'=>'是','0'=>'否']); ?>

	<?= $form->field($model, 'goods_sell')->radioList(['1'=>'是','0'=>'否']); ?>

	<?= $form->field($model, 'goods_quality')->radioList(['1'=>'是','0'=>'否']); ?>

	<?= $form->field($model, 'goods_New')->radioList(['1'=>'是','0'=>'否']); ?>

	<?= $form->field($model, 'goods_inventory')->textInput(); ?>

	<?= $form->field($model, 'goods_myshop')->textInput(); ?>

	<?= $form->field($model, 'goods_market')->textInput(); ?>

	<?= $form->field($model, 'goods_img')->fileInput(); ?>

<?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>