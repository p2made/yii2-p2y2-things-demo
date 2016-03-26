<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use p2made\widgets\Alert;
use p2made\widgets\FA;

/* @var $this \yii\web\View */
/* @var $content string */

yii\web\YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?> | P2Y2Things</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
<?= $this->render('navigation.php', []) ?>

		<div class="container">
<?= Alert::widget() ?>
<?= $content ?>
		</div>
	</div>

<?= $this->render('footer.php', []) ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
