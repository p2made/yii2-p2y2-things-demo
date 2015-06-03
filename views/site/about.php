<?php
/**
 * about.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

use yii\helpers\Html;

// load assets...
p2made\demo\Things\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>This is the About page. You may modify the following file to customize its content:</p>

	<code><?= __FILE__ ?></code>
</div>
