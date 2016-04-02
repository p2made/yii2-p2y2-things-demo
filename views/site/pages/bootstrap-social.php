<?php
/**
 * bootstrap-social.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\FA;
use p2made\helpers\BSocial;

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
p2made\assets\BootstrapSocialAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Bootstrap Social';
$this->params['breadcrumbs'][] = $this->title;

$socialIcons = array(
	BSocial::ADN,
	BSocial::BITBUCKET,
	BSocial::DROPBOX,
	BSocial::FACEBOOK,
	BSocial::FLICKR,
	BSocial::FOURSQUARE,
	BSocial::GITHUB,
	BSocial::GOOGLE,
	BSocial::INSTAGRAM,
	BSocial::LINKEDIN,
	BSocial::MICROSOFT,
	BSocial::ODNOKLASSNIKI,
	BSocial::OPENID,
	BSocial::PINTEREST,
	BSocial::REDDIT,
	BSocial::SOUNDCLOUD,
	BSocial::TUMBLR,
	BSocial::TWITTER,
	BSocial::VIMEO,
	BSocial::VK,
	BSocial::WINDOWS,
	BSocial::YAHOO,
);
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1>Social Buttons for Bootstrap <em>&amp; Yii2</em></h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center">Default Buttons</h3>
					</div>
				</div>

					<?php foreach ($socialIcons as $socialIcon) { ?>
						<div class="row">
							<div class="col-md-6">
								<code>BSocial::a('<?= $socialIcon ?>')</code><br class="clearfix">
							</div>
							<div class="col-md-6">
								<?= BSocial::a($socialIcon) ?><br class="clearfix">
							</div>
						</div>
					<?php } ?>

				</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center">Without 'btn-block'</h3>
					</div>
				</div>

					<?php foreach ($socialIcons as $socialIcon) { ?>
						<div class="row">
							<div class="col-md-8">
								<code>BSocial::a('<?= $socialIcon ?>')->block(false)</code><br class="clearfix">
							</div>
							<div class="col-md-4">
								<?= BSocial::a($socialIcon)->block(false) ?><br class="clearfix"><br>
							</div>
						</div>
					<?php } ?>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Icon Buttons</h3>
			</div>

			<?php foreach ($socialIcons as $socialIcon) { ?>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-10">
							<code>BSocial::a('<?= $socialIcon ?>')->icon()</code><br class="clearfix">
						</div>
						<div class="col-md-2">
							<?= BSocial::a($socialIcon)->icon() ?><br class="clearfix"><br>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>

		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Different Sizes</h3>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::a('github')->size('lg')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::a('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::a('github')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::a('github') ?><br class="clearfix">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::a('github')->size('sm')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::a('github')->size(BSocial::SIZE_SMALL) ?><br class="clearfix">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::a('github')->size('xs')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::a('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix">
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->icon()->size('lg')</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::a('github')->icon()->size(BSocial::SIZE_LARGE) ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::a('github')->icon() ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->size('sm')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::a('github')->size(BSocial::SIZE_SMALL)->icon() ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->size('xs')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::a('github')->size(BSocial::SIZE_XSMALL)->icon() ?><br class="clearfix"><br>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Custom Captions</h3>
			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-7">
						<code>BSocial::a('github')->caption('Use @@@ to log in to our awesome site!')</code><br class="clearfix">
					</div>
					<div class="col-md-5">
						<?= BSocial::a('github')->caption('Use @@@ to log in to our awesome site!') ?><br class="clearfix">
					</div>
				</div>
			</div>

		</div>

	</div>

<script>
</script>

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div><!-- /#site-index -->
