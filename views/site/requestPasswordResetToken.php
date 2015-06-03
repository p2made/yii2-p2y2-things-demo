<?php
/**
 * requestPasswordResetToken.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

// load assets...
p2made\demo\Things\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out your email. A link to reset password will be sent there.</p>

	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
				<?= $form->field($model, 'email') ?>
				<div class="form-group">
					<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
