<?php
/**
 * blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Blank Page';
$this->params['breadcrumbs'][] = $this->title;

// load assets...
p2made\demo\Things\assets\ThingsDemoAsset::register($this);
?>
<div id="content-wrapper">
	<h1><?= Html::encode($this->title) ?></h1>




</div><!-- /#content-wrapper -->
