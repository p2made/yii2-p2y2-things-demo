<?php
/**
 * calendar.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use p2made\models\FullCalendarEvent;
use p2made\widgets\FullCalendarWidget;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\demo\assets\ThingsDemoAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'Calendar Basic';
$this->params['breadcrumbs'][] = $this->title;

$events = array();

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'All Day Event';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, date("m"), 01, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Long Event';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, date("m"), 07, date("Y")));
	$newEvent->end = date("Y-m-d", mktime(0, 0, 0, date("m"), 10, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(16, 00, 00, date("m"), 09, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(16, 00, 00, date("m"), 16, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Conference';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, date("m"), 11, date("Y")));
	$newEvent->end = date("Y-m-d", mktime(0, 0, 0, date("m"), 13, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(10, 30, 00, date("m"), 12, date("Y")));
	$newEvent->end = date("Y-m-dTH-i-s", mktime(12, 30, 00, date("m"), 12, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Lunch';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(12, 00, 00, date("m"), 12, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(14, 30, 00, date("m"), 12, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Happy Hour';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(17, 30, 00, date("m"), 12, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Dinner';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(20, 00, 00, date("m"), 12, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Birthday Party';
	$newEvent->start = date("Y-m-dTH-i-s", mktime(07, 00, 00, date("m"), 13, date("Y")));
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Click for Google';
	$newEvent->url = 'http://google.com/';
	$newEvent->start = date("Y-m-d", mktime(0, 0, 0, date("m"), 28, date("Y")));
	$events[] = $newEvent;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<?= FullCalendarWidget::widget(array(
		'events' => $events,
	)) ?>

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div>
