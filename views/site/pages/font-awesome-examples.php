<?php
/**
 * font-awesome-examples.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\FA;

// load assets...
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Font Awesome Examples';
$this->params['breadcrumbs'][] = $this->title;

$_iconGroups = array(
	'web-application' => ['title' => 'Web Application Icons',
		'icons' =>['adjust', 'anchor', 'archive', 'area-chart', 'arrows', 'arrows-h', 'arrows-v', 'asterisk', 'at', 'automobile', 'balance-scale', 'ban', 'bank', 'bar-chart', 'bar-chart-o', 'barcode', 'bars', 'battery-0', 'battery-1', 'battery-2', 'battery-3', 'battery-4', 'battery-empty', 'battery-full', 'battery-half', 'battery-quarter', 'battery-three-quarters', 'bed', 'beer', 'bell', 'bell-o', 'bell-slash', 'bell-slash-o', 'bicycle', 'binoculars', 'birthday-cake', 'bluetooth', 'bluetooth-b', 'bolt', 'bomb', 'book', 'bookmark', 'bookmark-o', 'briefcase', 'bug', 'building', 'building-o', 'bullhorn', 'bullseye', 'bus', 'cab', 'calculator', 'calendar', 'calendar-check-o', 'calendar-minus-o', 'calendar-o', 'calendar-plus-o', 'calendar-times-o', 'camera', 'camera-retro', 'car', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'cart-arrow-down', 'cart-plus', 'cc', 'certificate', 'check', 'check-circle', 'check-circle-o', 'check-square', 'check-square-o', 'child', 'circle', 'circle-o', 'circle-o-notch', 'circle-thin', 'clock-o', 'clone', 'close', 'cloud', 'cloud-download', 'cloud-upload', 'code', 'code-fork', 'coffee', 'cog', 'cogs', 'comment', 'comment-o', 'commenting', 'commenting-o', 'comments', 'comments-o', 'compass', 'copyright', 'creative-commons', 'credit-card', 'credit-card-alt', 'crop', 'crosshairs', 'cube', 'cubes', 'cutlery', 'dashboard', 'database', 'desktop', 'diamond', 'dot-circle-o', 'download', 'edit', 'ellipsis-h', 'ellipsis-v', 'envelope', 'envelope-o', 'envelope-square', 'eraser', 'exchange', 'exclamation', 'exclamation-circle', 'exclamation-triangle', 'external-link', 'external-link-square', 'eye', 'eye-slash', 'eyedropper', 'fax', 'feed', 'female', 'fighter-jet', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-movie-o', 'file-pdf-o', 'file-photo-o', 'file-picture-o', 'file-powerpoint-o', 'file-sound-o', 'file-video-o', 'file-word-o', 'file-zip-o', 'film', 'filter', 'fire', 'fire-extinguisher', 'flag', 'flag-checkered', 'flag-o', 'flash', 'flask', 'folder', 'folder-o', 'folder-open', 'folder-open-o', 'frown-o', 'futbol-o', 'gamepad', 'gavel', 'gear', 'gears', 'gift', 'glass', 'globe', 'graduation-cap', 'group', 'hand-grab-o', 'hand-lizard-o', 'hand-paper-o', 'hand-peace-o', 'hand-pointer-o', 'hand-rock-o', 'hand-scissors-o', 'hand-spock-o', 'hand-stop-o', 'hashtag', 'hdd-o', 'headphones', 'heart', 'heart-o', 'heartbeat', 'history', 'home', 'hotel', 'hourglass', 'hourglass-1', 'hourglass-2', 'hourglass-3', 'hourglass-end', 'hourglass-half', 'hourglass-o', 'hourglass-start', 'i-cursor', 'image', 'inbox', 'industry', 'info', 'info-circle', 'institution', 'key', 'keyboard-o', 'language', 'laptop', 'leaf', 'legal', 'lemon-o', 'level-down', 'level-up', 'life-bouy', 'life-buoy', 'life-ring', 'life-saver', 'lightbulb-o', 'line-chart', 'location-arrow', 'lock', 'magic', 'magnet', 'mail-forward', 'mail-reply', 'mail-reply-all', 'male', 'map', 'map-marker', 'map-o', 'map-pin', 'map-signs', 'meh-o', 'microphone', 'microphone-slash', 'minus', 'minus-circle', 'minus-square', 'minus-square-o', 'mobile', 'mobile-phone', 'money', 'moon-o', 'mortar-board', 'motorcycle', 'mouse-pointer', 'music', 'navicon', 'newspaper-o', 'object-group', 'object-ungroup', 'paint-brush', 'paper-plane', 'paper-plane-o', 'paw', 'pencil', 'pencil-square', 'pencil-square-o', 'percent', 'phone', 'phone-square', 'photo', 'picture-o', 'pie-chart', 'plane', 'plug', 'plus', 'plus-circle', 'plus-square', 'plus-square-o', 'power-off', 'print', 'puzzle-piece', 'qrcode', 'question', 'question-circle', 'quote-left', 'quote-right', 'random', 'recycle', 'refresh', 'registered', 'remove', 'reorder', 'reply', 'reply-all', 'retweet', 'road', 'rocket', 'rss', 'rss-square', 'search', 'search-minus', 'search-plus', 'send', 'send-o', 'server', 'share', 'share-alt', 'share-alt-square', 'share-square', 'share-square-o', 'shield', 'ship', 'shopping-bag', 'shopping-basket', 'shopping-cart', 'sign-in', 'sign-out', 'signal', 'sitemap', 'sliders', 'smile-o', 'soccer-ball-o', 'sort', 'sort-alpha-asc', 'sort-alpha-desc', 'sort-amount-asc', 'sort-amount-desc', 'sort-asc', 'sort-desc', 'sort-down', 'sort-numeric-asc', 'sort-numeric-desc', 'sort-up', 'space-shuttle', 'spinner', 'spoon', 'square', 'square-o', 'star', 'star-half', 'star-half-empty', 'star-half-full', 'star-half-o', 'star-o', 'sticky-note', 'sticky-note-o', 'street-view', 'suitcase', 'sun-o', 'support', 'tablet', 'tachometer', 'tag', 'tags', 'tasks', 'taxi', 'television', 'terminal', 'thumb-tack', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up', 'ticket', 'times', 'times-circle', 'times-circle-o', 'tint', 'toggle-down', 'toggle-left', 'toggle-off', 'toggle-on', 'toggle-right', 'toggle-up', 'trademark', 'trash', 'trash-o', 'tree', 'trophy', 'truck', 'tty', 'tv', 'umbrella', 'university', 'unlock', 'unlock-alt', 'unsorted', 'upload', 'user', 'user-plus', 'user-secret', 'user-times', 'users', 'video-camera', 'volume-down', 'volume-off', 'volume-up', 'warning', 'wheelchair', 'wifi', 'wrench']
	],
	'hand' => ['title' => 'Hand Icons',
		'icons' =>['hand-grab-o', 'hand-lizard-o', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'hand-paper-o', 'hand-peace-o', 'hand-pointer-o', 'hand-rock-o', 'hand-scissors-o', 'hand-spock-o', 'hand-stop-o', 'thumbs-down', 'thumbs-o-down', 'thumbs-o-up', 'thumbs-up']
	],
	'transportation' => ['title' => 'Transportation Icons',
		'icons' =>['ambulance', 'automobile', 'bicycle', 'bus', 'cab', 'car', 'fighter-jet', 'motorcycle', 'plane', 'rocket', 'ship', 'space-shuttle', 'subway', 'taxi', 'train', 'truck', 'wheelchair']
	],
	'gender' => ['title' => 'Gender Icons',
		'icons' =>['genderless', 'intersex', 'mars', 'mars-double', 'mars-stroke', 'mars-stroke-h', 'mars-stroke-v', 'mercury', 'neuter', 'transgender', 'transgender-alt', 'venus', 'venus-double', 'venus-mars']
	],
	'file-type' => ['title' => 'File Type Icons',
		'icons' =>['file', 'file-archive-o', 'file-audio-o', 'file-code-o', 'file-excel-o', 'file-image-o', 'file-movie-o', 'file-o', 'file-pdf-o', 'file-photo-o', 'file-picture-o', 'file-powerpoint-o', 'file-sound-o', 'file-text', 'file-text-o', 'file-video-o', 'file-word-o', 'file-zip-o']
	],
	'spinner' => ['title' => 'Spinner Icons',
		'icons' =>['circle-o-notch', 'cog', 'gear', 'refresh', 'spinner']
	],
	'form-control' => ['title' => 'Form Control Icons',
		'icons' =>['check-square', 'check-square-o', 'circle', 'circle-o', 'dot-circle-o', 'minus-square', 'minus-square-o', 'plus-square', 'plus-square-o', 'square', 'square-o']
	],
	'payment' => ['title' => 'Payment Icons',
		'icons' =>['cc-amex', 'cc-diners-club', 'cc-discover', 'cc-jcb', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'credit-card', 'credit-card-alt', 'google-wallet', 'paypal']
	],
	'chart' => ['title' => 'Chart Icons',
		'icons' =>['area-chart', 'bar-chart', 'bar-chart-o', 'line-chart', 'pie-chart']
	],
	'currency' => ['title' => 'Currency Icons',
		'icons' =>['bitcoin', 'btc', 'cny', 'dollar', 'eur', 'euro', 'gbp', 'gg', 'gg-circle', 'ils', 'inr', 'jpy', 'krw', 'money', 'rmb', 'rouble', 'rub', 'ruble', 'rupee', 'shekel', 'sheqel', 'try', 'turkish-lira', 'usd', 'won', 'yen']
	],
	'text-editor' => ['title' => 'Text Editor Icons',
		'icons' =>['align-center', 'align-justify', 'align-left', 'align-right', 'bold', 'chain', 'chain-broken', 'clipboard', 'columns', 'copy', 'cut', 'dedent', 'eraser', 'file', 'file-o', 'file-text', 'file-text-o', 'files-o', 'floppy-o', 'font', 'header', 'indent', 'italic', 'link', 'list', 'list-alt', 'list-ol', 'list-ul', 'outdent', 'paperclip', 'paragraph', 'paste', 'repeat', 'rotate-left', 'rotate-right', 'save', 'scissors', 'strikethrough', 'subscript', 'superscript', 'table', 'text-height', 'text-width', 'th', 'th-large', 'th-list', 'underline', 'undo', 'unlink']
	],
	'directional' => ['title' => 'Directional Icons',
		'icons' =>['angle-double-down', 'angle-double-left', 'angle-double-right', 'angle-double-up', 'angle-down', 'angle-left', 'angle-right', 'angle-up', 'arrow-circle-down', 'arrow-circle-left', 'arrow-circle-o-down', 'arrow-circle-o-left', 'arrow-circle-o-right', 'arrow-circle-o-up', 'arrow-circle-right', 'arrow-circle-up', 'arrow-down', 'arrow-left', 'arrow-right', 'arrow-up', 'arrows', 'arrows-alt', 'arrows-h', 'arrows-v', 'caret-down', 'caret-left', 'caret-right', 'caret-square-o-down', 'caret-square-o-left', 'caret-square-o-right', 'caret-square-o-up', 'caret-up', 'chevron-circle-down', 'chevron-circle-left', 'chevron-circle-right', 'chevron-circle-up', 'chevron-down', 'chevron-left', 'chevron-right', 'chevron-up', 'exchange', 'hand-o-down', 'hand-o-left', 'hand-o-right', 'hand-o-up', 'long-arrow-down', 'long-arrow-left', 'long-arrow-right', 'long-arrow-up', 'toggle-down', 'toggle-left', 'toggle-right', 'toggle-up']
	],
	'video-player' => ['title' => 'Video Player Icons',
		'icons' =>['arrows-alt', 'backward', 'compress', 'eject', 'expand', 'fast-backward', 'fast-forward', 'forward', 'pause', 'pause-circle', 'pause-circle-o', 'play', 'play-circle', 'play-circle-o', 'random', 'step-backward', 'step-forward', 'stop', 'stop-circle', 'stop-circle-o', 'youtube-play']
	],
	'brand' => ['title' => 'Brand Icons',
		'icons' =>['500px', 'adn', 'amazon', 'android', 'angellist', 'apple', 'behance', 'behance-square', 'bitbucket', 'bitbucket-square', 'bitcoin', 'black-tie', 'bluetooth', 'bluetooth-b', 'btc', 'buysellads', 'cc-amex', 'cc-diners-club', 'cc-discover', 'cc-jcb', 'cc-mastercard', 'cc-paypal', 'cc-stripe', 'cc-visa', 'chrome', 'codepen', 'codiepie', 'connectdevelop', 'contao', 'css3', 'dashcube', 'delicious', 'deviantart', 'digg', 'dribbble', 'dropbox', 'drupal', 'edge', 'empire', 'expeditedssl', 'facebook', 'facebook-f', 'facebook-official', 'facebook-square', 'firefox', 'flickr', 'fonticons', 'fort-awesome', 'forumbee', 'foursquare', 'ge', 'get-pocket', 'gg', 'gg-circle', 'git', 'git-square', 'github', 'github-alt', 'github-square', 'gittip', 'google', 'google-plus', 'google-plus-square', 'google-wallet', 'gratipay', 'hacker-news', 'houzz', 'html5', 'instagram', 'internet-explorer', 'ioxhost', 'joomla', 'jsfiddle', 'lastfm', 'lastfm-square', 'leanpub', 'linkedin', 'linkedin-square', 'linux', 'maxcdn', 'meanpath', 'medium', 'mixcloud', 'modx', 'odnoklassniki', 'odnoklassniki-square', 'opencart', 'openid', 'opera', 'optin-monster', 'pagelines', 'paypal', 'pied-piper', 'pied-piper-alt', 'pinterest', 'pinterest-p', 'pinterest-square', 'product-hunt', 'qq', 'ra', 'rebel', 'reddit', 'reddit-alien', 'reddit-square', 'renren', 'safari', 'scribd', 'sellsy', 'share-alt', 'share-alt-square', 'shirtsinbulk', 'simplybuilt', 'skyatlas', 'skype', 'slack', 'slideshare', 'soundcloud', 'spotify', 'stack-exchange', 'stack-overflow', 'steam', 'steam-square', 'stumbleupon', 'stumbleupon-circle', 'tencent-weibo', 'trello', 'tripadvisor', 'tumblr', 'tumblr-square', 'twitch', 'twitter', 'twitter-square', 'usb', 'viacoin', 'vimeo', 'vimeo-square', 'vine', 'vk', 'wechat', 'weibo', 'weixin', 'whatsapp', 'wikipedia-w', 'windows', 'wordpress', 'xing', 'xing-square', 'y-combinator', 'y-combinator-square', 'yahoo', 'yc', 'yc-square', 'yelp', 'youtube', 'youtube-play', 'youtube-square']
	],
	'medical' => ['title' => 'Medical Icons',
		'icons' =>['ambulance', 'h-square', 'heart', 'heart-o', 'heartbeat', 'hospital-o', 'medkit', 'plus-square', 'stethoscope', 'user-md', 'wheelchair']
	],
);
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= FA::i('magic') . ' ' . Html::encode($this->title) ?></h1>
		Lots of easy ways to use Font Awesome
	</div>

	<div class="body-content">

		<p class="lead">
			With use <code>p2made\helpers\FA;</code> in your document header, you can place Font Awesome icons just about anywhere with <code>FA::i()</code>. Examples appreciatively re-used from the <a href="http://fontawesome.io/examples/">Font Awesome documentation <?= FA::i('external-link') ?></a>.
		</p>
		<p>
			I love the elegance & cleverness of the recursive methods in <a href="https://github.com/rmrevin/yii2-fontawesome" target="_blank">rmrevin/yii2-fontawesome <?= FA::i('external-link') ?></a>, however the syntax starts out shorter than HTML for basic icons but becomes much longer as attributes are added. I've added a few shortcuts that reduce common combinations to method names of 2 letters. My shortcuts are annotated here with <em>p2made&nbsp;shortcut</em>.
		</p>

<!--
		<section id="custom">
			<h2>Custom CSS</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>Anything you can do with CSS font styles, you can do with Font Awesome.</p>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>Star Ratings (inspired by <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
					<div class="well">
						<span class="rating">
							<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
						</span>
					</div>
				</div>
			</div>
		</section>
-->

		<section id="basic">
			<h2>Basic Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>
						<?= FA::i('camera-retro')->fixedWidth() ?>
						<code>FA::i('camera-retro')</code>
					</p>
				</div>
				<div class="col-md-8 col-sm-7">
					<p>
						You can place Font Awesome icons just about anywhere using <code>FA::i($name, $options = [])</code>.
					</p>
					<div class="alert alert-success">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('info-circle')->li()->size(FA::SIZE_LARGE) ?>
								If you change the font-size of the icon's container, the icon gets bigger. Same things goes for color, drop shadow, and anything else that gets inherited using CSS.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- / Basic Icons -->

		<section id="larger">
			<h2>Larger Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>
						<?= FA::i('camera-retro')->size(FA::SIZE_LARGE) ?>
						<code>FA::SIZE_LARGE</code>
					</p>
					<p>
						<?= FA::i('camera-retro')->size(FA::SIZE_2X) ?>
						<code>FA::SIZE_2X</code>
					</p>
					<p>
						<?= FA::i('camera-retro')->size(FA::SIZE_3X) ?>
						<code>FA::SIZE_3X</code>
					</p>
					<p>
						<?= FA::i('camera-retro')->size(FA::SIZE_4X) ?>
						<code>FA::SIZE_4X</code>
					</p>
					<p>
						<?= FA::i('camera-retro')->size(FA::SIZE_5X) ?>
						<code>FA::SIZE_5X</code>
					</p>
				</div>
				<div class="col-md-8 col-sm-7">
					<p>
						To increase icon sizes relative to their container, use
							<code>->size($value)</code> with
							<code>FA::SIZE_LARGE</code> (33% increase),
							<code>FA::SIZE_2X</code>,
							<code>FA::SIZE_3X</code>,
							<code>FA::SIZE_4X</code>, or
							<code>FA::SIZE_5X</code>
						constants.
					</p>
					<div class="alert alert-warning">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('exclamation-triangle')->li()->size(FA::SIZE_LARGE) ?>
								If your icons are getting chopped off on top and bottom, make sure you have sufficient line-height.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- / Larger Icons -->

		<section id="fixed-width">
			<h2>Fixed Width Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="list-group">
						<a class="list-group-item" href="#">
							<?= FA::fw('home') ?>&nbsp; Home
						</a>
						<a class="list-group-item" href="#">
							<?= FA::fw('book') ?>&nbsp; Library
						</a>
						<a class="list-group-item" href="#">
							<?= FA::fw('pencil') ?>&nbsp; Applications
						</a>
						<a class="list-group-item" href="#">
							<?= FA::fw('cog') ?>&nbsp; Settings
						</a>
					</div>
				</div>
				<div class="col-md-8 col-sm-7">
					<p>
						<em>p2made shortcut</em><br>
						Use <code>FA::fw($name, $options = [])</code> to set icons at a fixed width. Great to use when different icon widths throw off alignment. Especially useful in things like nav lists &amp; list groups.
					</p>
				</div>
			</div>
		</section><!-- / Fixed Width Icons -->

		<section id="list">
			<h2>List Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<ul class="fa-ul">
						<li><?= FA::li('check-square') ?> List icons</li>
						<li><?= FA::li('check-square') ?> can be used</li>
						<li><?= FA::li('spinner')->spin() ?> as bullets</li>
						<li><?= FA::li('square') ?> in lists</li>
					</ul>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						<em>p2made shortcut</em><br>
						Use <code>FA::ul($name, $options = [])</code> and <code>FA::li($name, $options = [])</code> to easily replace default bullets in unordered lists.
					</p>
				</div>
			</div>
		</section><!-- /  -->

		<section id="bordered-pulled">
			<h2>Bordered & Pulled Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>
						<?= FA::bl('quote-left')->size(FA::SIZE_3X) ?>
						&hellip;tomorrow we will run faster, stretch out our arms farther&hellip; And then one fine morning — So we beat on, boats against the current, borne back ceaselessly into the past.
					</p>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						<em>p2made shortcut</em><br>
						Use <code>FA::bd($name, $options = [])</code> and <code>FA::pl($name, $options = [])</code> or <code>FA::pr($name, $options = [])</code> for easy pull quotes or article icons.
					</p>
					<div class="alert alert-warning">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('exclamation-triangle')->li()->size(FA::SIZE_LARGE) ?>
								My sortcuts don't (yet) recurse, so you'd have to combine, like <code>FA::bd($name, $options = [])->pullLeft()</code> for this example. Because these are commonly combined, I've added <code>FA::bl($name, $options = [])</code> (this example, border, pull left) &amp; <code>FA::br($name, $options = [])</code> (border, pull right) shortcuts.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- / Bordered & Pulled Icons -->

		<section id="animated">
			<h2>Animated Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>
						<?= FA::sp('spinner')->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
						<?= FA::sp('circle-o-notch')->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
						<?= FA::sp('refresh')->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
						<?= FA::sp('cog')->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
					</p>
					<p>
						<?= FA::pu('spinner')->fixedWidth()->addCssClass('margin-bottom')->size(FA::SIZE_3X) ?>
					</p>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						<em>p2made shortcut</em><br>
						Use the <code>FA::sp($name, $options = [])</code> class to get any icon to rotate, and use <code>FA::pu($name, $options = [])</code> to have it rotate
						with 8 steps. Works well with <code>'spinner'</code>, <code>'refresh'</code>, and <code>'cog'</code>.
					</p>
					<div class="alert alert-warning">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('exclamation-triangle')->li()->size(FA::SIZE_LARGE) ?>
								Some browsers on some platforms have issues with animated icons resulting in a jittery wobbling effect. See <a href="https://github.com/FortAwesome/Font-Awesome/issues/671" class="alert-link" target="_blank">issue #671</a> for examples and possible workarounds.
							</li>
						</ul>
					</div>
					<div class="alert alert-info">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('info-circle')->li()->size(FA::SIZE_LARGE) ?>
								CSS3 animations aren't supported in IE8 - IE9.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- / Animated Icons -->

		<section id="rotated-flipped">
			<h2>Rotated &amp; Flipped</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p style="font-size: 18px;">
						<?= FA::i('shield') ?>&nbsp; normal<br>
						<?= FA::i('shield')->rotate(FA::ROTATE_90) ?>&nbsp;
						<code>FA::ROTATE_90</code><br>
						<?= FA::i('shield')->rotate(FA::ROTATE_180) ?>&nbsp;
						<code>FA::ROTATE_180</code><br>
						<?= FA::i('shield')->rotate(FA::ROTATE_270) ?>&nbsp;
						<code>FA::ROTATE_270</code><br>
						<?= FA::i('shield')->flip(FA::FLIP_HORIZONTAL) ?>&nbsp;
						<code>FA::FLIP_HORIZONTAL</code><br>
						<?= FA::i('shield')->flip(FA::FLIP_VERTICAL) ?>&nbsp;
						<code>FA::FLIP_VERTICAL</code><br>
					</p>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						To arbitrarily rotate icons, use <code>->rotate($value)</code> with
							<code>FA::ROTATE_90</code>
							<code>FA::ROTATE_180</code>, or
							<code>FA::ROTATE_270</code>
						constants.
					</p>
					<p>
						To arbitrarily flip icons, use <code>->flip($value)</code> with
							<code>FA::FLIP_HORIZONTAL</code>, or
							<code>FA::FLIP_VERTICAL</code>
						constants.
					</p>
				</div>
			</div>
		</section><!-- / Rotated &amp; Flipped -->

		<section id="stacked">
			<h2>Stacked Icons</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="margin-bottom">
						<?= FA::s('twitter', 'square-o', ['class' => 'fa-lg']) ?>
						<code>FA::s('twitter', 'square-o')</code><br>

						<?= FA::s(FA::vs('flag'), 'circle', ['class' => 'fa-lg']) ?>
						<code>FA::s(FA::vs('flag'), 'circle')</code><br>

						<?= FA::s(FA::vs('terminal'), 'square', ['class' => 'fa-lg']) ?>
						<code>FA::s(FA::vs('terminal'), 'square')</code><br>

						<?= FA::is(
							FA::i('ban')->addCssClass('text-danger'),
							FA::i('camera'),
							['class' => 'fa-lg']
						) ?>
						<code>FA::is(FA::i('ban')->addCssClass('text-danger'), FA::i('camera'))</code><br>

					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						To stack multiple icons, use the <code>fa-stack</code> class on the parent, the <code>fa-stack-1x</code>
						for the regularly sized icon, and <code>fa-stack-2x</code> for the larger icon. <code>fa-inverse</code>
						can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent
						to get further control of sizing.
					</p>
					<div class="alert alert-success">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('info-circle')->li()->size(FA::SIZE_LARGE) ?>
								<em>p2made shortcut</em><br>
								The original FA classes don't allow for the larger icon in the stack to be on top like this example. My <code>FA::is($foreground, $background, $options = [])</code> class provides a hacky workaround.
							</li>
						</ul>
					</div>
					<div class="alert alert-warning">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('exclamation-triangle')->li()->size(FA::SIZE_LARGE) ?>
								<em>p2made shortcut</em><br>
								Like I said, <code>FA::is()</code> is hacky. It doesn't provide the recursion &amp; icons must be handed in fully formed. The size must be set as a class in <code>$options</code>.
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<div class="margin-bottom">
						<?= FA::ban(FA::i('camera'), ['class' => 'fa-lg']) ?>
						<code>FA::ban(FA::i('camera'))</code><br>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<p>
						<em>p2made shortcut</em><br>
						That hacky class is pretty verbose so <code>FA::ban($object, $options = [])'ban'</code> is a whole lot more concise for <code>'ban'</code> stacks.
					</p>
					<div class="alert alert-warning">
						<ul class="fa-ul">
							<li>
								<?= FA::fw('exclamation-triangle')->li()->size(FA::SIZE_LARGE) ?>
								<em>p2made shortcut</em><br>
								It calls the first hacky effort so same limitations apply.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!-- / Stacked Icons -->

		<section id="bootstrap">
			<h2>Bootstrap 3 Examples</h2>
			<div class="row">
				<div class="col-md-3 col-sm-4">
					<p>
						<a class="btn btn-danger" href="#">
							<?= FA::i('trash-o')->size(FA::SIZE_LARGE) ?> Delete
						</a>
						<a class="btn btn-default btn-sm" href="#">
							<?= FA::i('cog') ?> Settings
						</a>
					</p>
					<p>
						<a class="btn btn-lg btn-success" href="#">
							<?= FA::pl('flag')->size(FA::SIZE_2X) ?>
							Font Awesome<br>Version 4.5.0
						</a>
					</p>
					<div class="margin-bottom">
						<div class="btn-group">
							<a class="btn btn-default" href="#"><?= FA::i('align-left') ?></a>
							<a class="btn btn-default" href="#"><?= FA::i('align-center') ?></a>
							<a class="btn btn-default" href="#"><?= FA::i('align-right') ?></a>
							<a class="btn btn-default" href="#"><?= FA::i('align-justify') ?></a>
						</div>
					</div><br>
					<div class="margin-bottom">
						<div class="input-group margin-bottom-sm">
							<span class="input-group-addon"><?= FA::fw('envelope-o') ?></span>
							<input class="form-control" type="text" placeholder="Email address">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><?= FA::fw('key') ?></span>
							<input class="form-control" type="password" placeholder="Password">
						</div>
					</div><br>
					<div class="margin-bottom">
						<div class="btn-group open">
							<a class="btn btn-primary" href="#"><?= FA::fw('user') ?> User</a>
							<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
								<?= FA::i('caret-down')->tag('span') ?></a>
							<ul class="dropdown-menu">
								<li><a href="#"><?= FA::fw('pencil') ?> Edit</a></li>
								<li><a href="#"><?= FA::fw('trash-o') ?> Delete</a></li>
								<li><a href="#"><?= FA::fw('ban') ?> Ban</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="i"></i> Make admin</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-md-9 col-sm-8">
					<p>Font Awesome works great with the full range of Bootstrap components.</p>
				</div>
			</div>
		</section><!-- / Bootstrap 3 Examples -->

	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw('code')->li()->size(FA::SIZE_LARGE) . '<code>' . __FILE__ . '</code>' ?>
			</li>
		</ul>
	</div>
</div><!-- /#content-wrapper -->
