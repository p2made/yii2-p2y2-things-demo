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
	BSocial::YAHOO,
);
?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<div class="container">
			<h1>Social Buttons for Bootstrap</h1>
			<p>
				Social Sign-In Buttons made in pure CSS based on
				<a href="https://getbootstrap.com/">Bootstrap</a> and
				<a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome</a>!
			</p>
			<p>
				... &amp; integrated into Yii 2!
			</p>
		</div>
	</div>

	<div class="body-content">

		<p>
		Here is <a href="https://lipis.github.io/bootstrap-social/" target="_blank">Bootstrap Social<?= FA::icon('external-link') ?></a> as helpers for <a href="http://www.yiiframework.com" target="_blank">Yii2 <?= FA::icon('external-link') ?></a>. Modeled on <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::icon('external-link') ?></a> and working in much the same way.
		</p>




		<div class="row">
			<div class="col-sm-4 social-buttons">
				<h3 class="text-center">The Buttons</h3>
				<a class="btn btn-block btn-social btn-adn">
					<i class="fa fa-adn"></i> Sign in with App.net
				</a>
				<a class="btn btn-block btn-social btn-bitbucket">
					<i class="fa fa-bitbucket"></i> Sign in with Bitbucket
				</a>
				<a class="btn btn-block btn-social btn-dropbox">
					<i class="fa fa-dropbox"></i> Sign in with Dropbox
				</a>
				<a class="btn btn-block btn-social btn-facebook">
					<i class="fa fa-facebook"></i> Sign in with Facebook
				</a>
				<a class="btn btn-block btn-social btn-flickr">
					<i class="fa fa-flickr"></i> Sign in with Flickr
				</a>
				<a class="btn btn-block btn-social btn-foursquare">
					<i class="fa fa-foursquare"></i> Sign in with Foursquare
				</a>
				<a class="btn btn-block btn-social btn-github">
					<i class="fa fa-github"></i> Sign in with GitHub
				</a>
				<a class="btn btn-block btn-social btn-google">
					<i class="fa fa-google"></i> Sign in with Google
				</a>
				<a class="btn btn-block btn-social btn-instagram">
					<i class="fa fa-instagram"></i> Sign in with Instagram
				</a>
				<a class="btn btn-block btn-social btn-linkedin">
					<i class="fa fa-linkedin"></i> Sign in with LinkedIn
				</a>
				<a class="btn btn-block btn-social btn-microsoft">
					<i class="fa fa-windows"></i> Sign in with Microsoft
				</a>
				<a class="btn btn-block btn-social btn-odnoklassniki">
					<i class="fa fa-odnoklassniki"></i> Sign in with Odnoklassniki
				</a>
				<a class="btn btn-block btn-social btn-openid">
					<i class="fa fa-openid"></i> Sign in with OpenID
				</a>
				<a class="btn btn-block btn-social btn-pinterest">
					<i class="fa fa-pinterest"></i> Sign in with Pinterest
				</a>
				<a class="btn btn-block btn-social btn-reddit">
					<i class="fa fa-reddit"></i> Sign in with Reddit
				</a>
				<a class="btn btn-block btn-social btn-soundcloud">
					<i class="fa fa-soundcloud"></i> Sign in with SoundCloud
				</a>
				<a class="btn btn-block btn-social btn-tumblr">
					<i class="fa fa-tumblr"></i> Sign in with Tumblr
				</a>
				<a class="btn btn-block btn-social btn-twitter">
					<i class="fa fa-twitter"></i> Sign in with Twitter
				</a>
				<a class="btn btn-block btn-social btn-vimeo">
					<i class="fa fa-vimeo-square"></i> Sign in with Vimeo
				</a>
				<a class="btn btn-block btn-social btn-vk">
					<i class="fa fa-vk"></i> Sign in with VK
				</a>
				<a class="btn btn-block btn-social btn-yahoo">
					<i class="fa fa-yahoo"></i> Sign in with Yahoo!
				</a>

				<hr>

				<div class="text-center">
					<a class="btn btn-social-icon btn-adn"><i class="fa fa-adn"></i></a>
					<a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
					<a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
					<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
					<a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
					<a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
					<a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
					<a class="btn btn-social-icon btn-google"><i class="fa fa-google"></i></a>
					<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
					<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
					<a class="btn btn-social-icon btn-microsoft"><i class="fa fa-windows"></i></a>
					<a class="btn btn-social-icon btn-odnoklassniki"><i class="fa fa-odnoklassniki"></i></a>
					<a class="btn btn-social-icon btn-openid"><i class="fa fa-openid"></i></a>
					<a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
					<a class="btn btn-social-icon btn-reddit"><i class="fa fa-reddit"></i></a>
					<a class="btn btn-social-icon btn-soundcloud"><i class="fa fa-soundcloud"></i></a>
					<a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
					<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
					<a class="btn btn-social-icon btn-vimeo"><i class="fa fa-vimeo-square"></i></a>
					<a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
					<a class="btn btn-social-icon btn-yahoo"><i class="fa fa-yahoo"></i></a>
				</div>
			</div>

			<div class="col-sm-4">
				<h3 class="text-center">Available Classes</h3>
				<ul class="social-class list-unstyled">
					<li data-code="adn" data-name="App.net"><code>btn-adn</code> <span class="social-hex">#D87A68</span></li>
					<li data-code="bitbucket" data-name="Bitbucket"><code>btn-bitbucket</code> <span class="social-hex">#205081</span></li>
					<li data-code="dropbox" data-name="Dropbox"><code>btn-dropbox</code> <span class="social-hex">#1087DD</span></li>
					<li data-code="facebook" data-name="Facebook"><code>btn-facebook</code> <span class="social-hex">#3B5998</span></li>
					<li data-code="flickr" data-name="Flickr"><code>btn-flickr</code> <span class="social-hex">#2BA9E1</span></li>
					<li data-code="foursquare" data-name="Foursquare"><code>btn-foursquare</code> <span class="social-hex">#f94877</span></li>
					<li data-code="github" data-name="GitHub"><code>btn-github</code> <span class="social-hex">#444444</span></li>
					<li data-code="google" data-name="Google"><code>btn-google</code> <span class="social-hex">#DD4B39</span></li>
					<li data-code="instagram" data-name="Instagram"><code>btn-instagram</code> <span class="social-hex">#3F729B</span></li>
					<li data-code="linkedin" data-name="LinkedIn"><code>btn-linkedin</code> <span class="social-hex">#007BB6</span></li>
					<li data-code="microsoft" data-icon="windows" data-name="Microsoft"><code>btn-microsoft</code> <span class="social-hex">#2672EC</span></li>
					<li data-code="odnoklassniki" data-name="Odnoklassniki"><code>btn-odnoklassniki</code> <span class="social-hex">#F4731C</span></li>
					<li data-code="openid" data-name="OpenID"><code>btn-openid</code> <span class="social-hex">#F7931E</span></li>
					<li data-code="pinterest" data-name="Pinterest"><code>btn-pinterest</code> <span class="social-hex">#CB2027</span></li>
					<li data-code="reddit" data-name="Reddit"><code>btn-reddit</code> <span class="social-hex">#EFF7FF</span></li>
					<li data-code="soundcloud" data-name="SoundCloud"><code>btn-soundcloud</code> <span class="social-hex">#FF5500</span></li>
					<li data-code="tumblr" data-name="Tumblr"><code>btn-tumblr</code> <span class="social-hex">#CB2027</span></li>
					<li data-code="twitter" data-name="Twitter"><code>btn-twitter</code> <span class="social-hex">#55ACEE</span></li>
					<li data-code="vimeo" data-icon="vimeo-square" data-name="Vimeo"><code>btn-vimeo</code> <span class="social-hex">#1AB7EA</span></li>
					<li data-code="vk" data-name="VK"><code>btn-vk</code> <span class="social-hex">#587EA3</span></li>
					<li data-code="yahoo" data-name="Yahoo!"><code>btn-yahoo</code> <span class="social-hex">#720E9E</span></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<div class="social-sizes">
					<h3 class="text-center">Different Sizes</h3>
					<a class="btn btn-block btn-social btn-lg btn-google">
						<i class="fa fa-google"></i>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-google">
						<i class="fa fa-google"></i>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-sm btn-google">
						<i class="fa fa-google"></i>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-xs btn-google">
						<i class="fa fa-google"></i>
						Sign in with Google
					</a>
					<hr>
					<div class="text-center">
						<a class="btn btn-social-icon btn-lg btn-google"><i class="fa fa-google"></i></a>
						<a class="btn btn-social-icon btn-google"><i class="fa fa-google"></i></a>
						<a class="btn btn-social-icon btn-sm btn-google"><i class="fa fa-google"></i></a>
						<a class="btn btn-social-icon btn-xs btn-google"><i class="fa fa-google"></i></a>
					</div>
				</div>
				<hr>
				<div class="alert alert-info">
					<h4>Check them out in real projects</h4>
					<ul>
						<li><a class="alert-link" href="https://gae-init.appspot.com/signin/">gae-init</a></li>
						<li><a class="alert-link" href="https://restaurant.app.foodit.com/rms/signin">FOODit</a></li>
					</ul>
				</div>
			</div>
		</div>









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
								<code>BSocial::nb('<?= $socialIcon ?>')</code><br class="clearfix">
							</div>
							<div class="col-md-4">
								<?= BSocial::nb($socialIcon) ?><br class="clearfix"><br>
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
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-10">
							<code>BSocial::i('<?= $socialIcon ?>')</code><br class="clearfix">
						</div>
						<div class="col-md-2">
							<?= BSocial::i($socialIcon) ?><br class="clearfix"><br>
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
						<code>BSocial::i('github')->size('lg')</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::i('github')</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github') ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->size('sm')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github')->size(BSocial::SIZE_SMALL) ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::a('github')->size('xs')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix"><br>
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

		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">As &lt;button&gt; Tags</h3>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::b('github')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::b('github') ?><br class="clearfix">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::bi('github')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::bi('github') ?><br class="clearfix">
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<h4 class="text-center">in different sizes</h4>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::b('github')->size('lg')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::b('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<code>BSocial::b('github')->size('xs')</code><br class="clearfix">
					</div>
					<div class="col-md-6">
						<?= BSocial::b('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::i('github')->size('lg')</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github')->size(BSocial::SIZE_LARGE) ?><br class="clearfix"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<code>BSocial::b('github')->size('xs')->icon()</code><br class="clearfix">
					</div>
					<div class="col-md-2">
						<?= BSocial::i('github')->size(BSocial::SIZE_XSMALL) ?><br class="clearfix"><br>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<h4 class="text-center">&amp; with custom captions</h4>
			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-7">
						<code>BSocial::b('github')->caption('Use @@@ to log in to our awesome site!')</code><br class="clearfix">
					</div>
					<div class="col-md-5">
						<?= BSocial::b('github')->caption('Use @@@ to log in to our awesome site!') ?><br class="clearfix">
					</div>
				</div>
			</div>

		</div>

	</div>

<script>
</script>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw('code')->li()->size(FA::SIZE_LARGE) . '<code>' . __FILE__ . '</code>' ?>
			</li>
		</ul>
	</div>
</div><!-- /#site-index -->
