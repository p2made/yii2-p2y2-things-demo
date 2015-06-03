<?php
/**
 * signup.php
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
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title"><?= Html::encode($this->title) ?></h2>
				</div>
				<div class="panel-body">

					<p>Please fill out the following fields to signup:</p>

					<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
						<?= $form->field($model, 'username') ?>
						<?= $form->field($model, 'email') ?>
						<?= $form->field($model, 'password')->passwordInput() ?>
						<div class="form-group">
							<?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
						</div>
					<?php ActiveForm::end(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
