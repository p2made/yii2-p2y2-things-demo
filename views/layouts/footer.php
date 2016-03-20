<?php
/**
 * footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use p2made\widgets\FA;

/* @var $this \yii\web\View */

yii\web\YiiAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
?>
<footer class="footer">
	<div class="container">
		<p class="pull-left">
			Crafted with <?= FA::icon('heart') ?> by Pedro fp, on the
			<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
				Sunshine Coast <?= FA::icon('external-link') ?>
			</a> of
			<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
				Queensland <?= FA::icon('external-link') ?>
			</a>,
			<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
				Australia <?= FA::icon('external-link') ?>
			</a>
			<?= FA::icon('copyright') ?> <?= date('Y') ?>
		</p>

		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>
