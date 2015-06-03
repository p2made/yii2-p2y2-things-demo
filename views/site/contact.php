<?php
/**
 * contact.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

// load assets...
p2made\demo\Things\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<h1><?= Html::encode($this->title) ?></h1>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
				</div>
				<div class="panel-body">

					<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
						<?= $form->field($model, 'name') ?>
						<?= $form->field($model, 'email') ?>
						<?= $form->field($model, 'subject') ?>
						<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
						<!--< ?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
						]) ?>-->
						<div class="form-group">
							<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
						</div>
					<?php ActiveForm::end(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
