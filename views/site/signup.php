<?php
/**
 * signup.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;

// load assets...

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<h3 class="text-center">Please fill out the following fields to signup:</h3>

			<div class="well">
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
