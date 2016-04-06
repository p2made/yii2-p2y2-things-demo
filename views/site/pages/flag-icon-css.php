<?php
/**
 * flag-icon-css.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\FA;
use p2made\helpers\FI;

/**
 * Use this helper with...
 *
 * use p2made\helpers\BSocial;
 * ...
 * echo BSocial::method([$params]);
 *
 * or
 *
 * echo \p2made\helpers\BSocial::method([$params]);
 */


// load assets...
p2made\assets\FlagIconCssAsset::register($this);
p2made\demo\assets\FlagIconsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Flag Icon CSS';
$this->params['breadcrumbs'][] = $this->title;


$allFlags = array(
	'iso-flags' => ['ad', 'ae', 'af', 'ag', 'ai', 'al', 'am', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'ax', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bl', 'bm', 'bn', 'bo', 'bq', 'br', 'bs', 'bt', 'bv', 'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'cn', 'co', 'cr', 'cu', 'cv', 'cw', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'ec', 'ee', 'eg', 'eh', 'er', 'es', 'et', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo', 'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mf', 'mg', 'mh', 'mk', 'ml', 'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'rs', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'sv', 'sx', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv', 'tw', 'tz', 'ua', 'ug', 'um', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'ye', 'yt', 'za', 'zm', 'zw'],
	'others' => ['eu', 'gb-eng', 'gb-sct', 'gb-wls', 'un'],
);

$inlineItems = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'p class="lead"');
$intro = 'au';
$wrappers = array(
	'col-lg-3 col-md-4 col-sm-4 col-xs-6', 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
	'col-lg-3 col-md-4 col-sm-4 col-xs-3', 'col-lg-3 col-sm-2 col-xs-3', 'col-sm-2 col-xs-3',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3 hidden-xs',
	'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3', 'col-sm-2 col-xs-3 visible-lg'
);,
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= FA::i('flag') . ' ' . Html::encode($this->title) ?></h1>

		<p>SVG flags &amp; CSS from <a href="https://lipis.github.io/flag-icon-css/" target="_blank">flag-icon-css<?= FA::icon('external-link') ?></a> as Yii 2 assets &amp; helpers.</p>
	</div>

	<div class="body-content">

		<p>
			Here is <a href="https://lipis.github.io/bootstrap-social/" target="_blank">Bootstrap Social<?= FA::icon('external-link') ?></a> as helpers for <a href="http://www.yiiframework.com" target="_blank">Yii2 <?= FA::icon('external-link') ?></a>. Modeled on <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::icon('external-link') ?></a> and working in much the same way.
		</p>

		<section id="examples">
			<div class="page-header">
				<h1>Examples (inline with text)</h1>
			</div>
			<div class="no-wrap">
				<?php foreach ($inlineItems as $item): ?>
				<?= '<' . $item . '>' ?>
					<?= $item ?>
					<?= FI::i('au') . ' ' . FI::square('au') ?>
					<span class="label label-default"><?= FI::i($intro) . ' ' . $intro ?></span>
					<span class="label label-primary"><?= FI::i($intro) . ' ' . $intro ?></span>
					<span class="label label-success"><?= FI::i($intro) . ' ' . $intro ?></span>
					<span class="label label-info"><?= FI::i($intro) . ' ' . $intro ?></span>
					<span class="label label-warning"><?= FI::i($intro) . ' ' . $intro ?></span>
					<span class="label label-danger"><?= FI::i($intro) . ' ' . $intro ?></span>
				<?= '</' . $item . '>' ?>
				<?php endforeach; ?>
			</div>
		</section>

		<section id="more" class="d">
			<div class="page-header">
				<h1>Examples (on any element)</h1>
			</div>
			<div class="row">
				<?php
					$randKeys = array_rand($allFlags['iso-flags'], 15);
					$randFlags = [];
					shuffle($randKeys);
					foreach ($randKeys as $key) {
						$randFlags[] = $allFlags['iso-flags'][$key];
					}
				?>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
					<div class="flag-wrapper"><?= FI::div('au') ?></div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-lg-3 col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3 hidden-xs">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
				<div class="col-sm-2 col-xs-3 visible-lg">
					<div class="flag-wrapper"><?= FI::div(array_pop($randFlags)) ?></div>
				</div>
			</div>
		</section>

		<section class="all-flags">
			<div class="page-header">
				<h1>ISO 3166-1 Flags</h1>
			</div>
			<div class="row">
				<?php foreach ($allFlags['iso-flags'] as $flag): ?>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::divTitleId($flag) ?></div>
				</div>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="all-flags">
			<div class="page-header">
				<h1>More Flags</h1>
			</div>
			<div class="row">
				<?php foreach ($allFlags['others'] as $flag): ?>
				<div class="col-md-1 col-sm-2 col-xs-3">
					<div class="flag-wrapper"><?= FI::divTitleId($flag) ?></div>
				</div>
				<?php endforeach; ?>
			</div>
		</section>

	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw('code')->li()->size(FA::SIZE_LARGE) . '<code>' . __FILE__ . '</code>' ?>
			</li>
		</ul>
	</div>
</div><!-- /#site-index -->
