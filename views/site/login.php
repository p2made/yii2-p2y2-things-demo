<?php
/**
 * login.php
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
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title"><?= Html::encode($this->title) ?></h2>
				</div>
				<div class="panel-body">

					<p>Please fill out the following fields to login:</p>

					<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
						<?= $form->field($model, 'username') ?>
						<?= $form->field($model, 'password')->passwordInput() ?>
						<?= $form->field($model, 'rememberMe')->checkbox() ?>
						<div style="color:#999;margin:1em 0">
							If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
						</div>
						<div class="form-group">
							<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
						</div>
					<?php ActiveForm::end(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
