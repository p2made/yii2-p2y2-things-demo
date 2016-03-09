<?php
/**
 * glyphicons.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Glyphicons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					Glyphicons
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="fa col-lg-3">
							<p><i class="glyphicon glyphicon-adjust fa-fw"></i> glyphicon-adjust </p><br>
							<p><i class="glyphicon glyphicon-alert fa-fw"></i> glyphicon-alert </p><br>
							<p><i class="glyphicon glyphicon-align-center fa-fw"></i> glyphicon-align-center </p><br>
							<p><i class="glyphicon glyphicon-align-justify fa-fw"></i> glyphicon-align-justify </p><br>
							<p><i class="glyphicon glyphicon-align-left fa-fw"></i> glyphicon-align-left </p><br>
							<p><i class="glyphicon glyphicon-align-right fa-fw"></i> glyphicon-align-right </p><br>
							<p><i class="glyphicon glyphicon-apple fa-fw"></i> glyphicon-apple </p><br>
							<p><i class="glyphicon glyphicon-arrow-down fa-fw"></i> glyphicon-arrow-down </p><br>
							<p><i class="glyphicon glyphicon-arrow-left fa-fw"></i> glyphicon-arrow-left </p><br>
							<p><i class="glyphicon glyphicon-arrow-right fa-fw"></i> glyphicon-arrow-right </p><br>
							<p><i class="glyphicon glyphicon-arrow-up fa-fw"></i> glyphicon-arrow-up </p><br>
							<p><i class="glyphicon glyphicon-asterisk fa-fw"></i> glyphicon-asterisk </p><br>
							<p><i class="glyphicon glyphicon-baby-formula fa-fw"></i> glyphicon-baby-formula </p><br>
							<p><i class="glyphicon glyphicon-backward fa-fw"></i> glyphicon-backward </p><br>
							<p><i class="glyphicon glyphicon-ban-circle fa-fw"></i> glyphicon-ban-circle </p><br>
							<p><i class="glyphicon glyphicon-barcode fa-fw"></i> glyphicon-barcode </p><br>
							<p><i class="glyphicon glyphicon-bed fa-fw"></i> glyphicon-bed </p><br>
							<p><i class="glyphicon glyphicon-bell fa-fw"></i> glyphicon-bell </p><br>
							<p><i class="glyphicon glyphicon-bishop fa-fw"></i> glyphicon-bishop </p><br>
							<p><i class="glyphicon glyphicon-bitcoin fa-fw"></i> glyphicon-bitcoin </p><br>
							<p><i class="glyphicon glyphicon-blackboard fa-fw"></i> glyphicon-blackboard </p><br>
							<p><i class="glyphicon glyphicon-bold fa-fw"></i> glyphicon-bold </p><br>
							<p><i class="glyphicon glyphicon-book fa-fw"></i> glyphicon-book </p><br>
							<p><i class="glyphicon glyphicon-bookmark fa-fw"></i> glyphicon-bookmark </p><br>
							<p><i class="glyphicon glyphicon-briefcase fa-fw"></i> glyphicon-briefcase </p><br>
							<p><i class="glyphicon glyphicon-btc fa-fw"></i> glyphicon-btc </p><br>
							<p><i class="glyphicon glyphicon-bullhorn fa-fw"></i> glyphicon-bullhorn </p><br>
							<p><i class="glyphicon glyphicon-calendar fa-fw"></i> glyphicon-calendar </p><br>
							<p><i class="glyphicon glyphicon-camera fa-fw"></i> glyphicon-camera </p><br>
							<p><i class="glyphicon glyphicon-cd fa-fw"></i> glyphicon-cd </p><br>
							<p><i class="glyphicon glyphicon-certificate fa-fw"></i> glyphicon-certificate </p><br>
							<p><i class="glyphicon glyphicon-check fa-fw"></i> glyphicon-check </p><br>
							<p><i class="glyphicon glyphicon-chevron-down fa-fw"></i> glyphicon-chevron-down </p><br>
							<p><i class="glyphicon glyphicon-chevron-left fa-fw"></i> glyphicon-chevron-left </p><br>
							<p><i class="glyphicon glyphicon-chevron-right fa-fw"></i> glyphicon-chevron-right </p><br>
							<p><i class="glyphicon glyphicon-chevron-up fa-fw"></i> glyphicon-chevron-up </p><br>
							<p><i class="glyphicon glyphicon-circle-arrow-down fa-fw"></i> glyphicon-circle-arrow-down </p><br>
							<p><i class="glyphicon glyphicon-circle-arrow-left fa-fw"></i> glyphicon-circle-arrow-left </p><br>
							<p><i class="glyphicon glyphicon-circle-arrow-right fa-fw"></i> glyphicon-circle-arrow-right </p><br>
							<p><i class="glyphicon glyphicon-circle-arrow-up fa-fw"></i> glyphicon-circle-arrow-up </p><br>
							<p><i class="glyphicon glyphicon-cloud fa-fw"></i> glyphicon-cloud </p><br>
							<p><i class="glyphicon glyphicon-cloud-download fa-fw"></i> glyphicon-cloud-download </p><br>
							<p><i class="glyphicon glyphicon-cloud-upload fa-fw"></i> glyphicon-cloud-upload </p><br>
							<p><i class="glyphicon glyphicon-cog fa-fw"></i> glyphicon-cog </p><br>
							<p><i class="glyphicon glyphicon-collapse-down fa-fw"></i> glyphicon-collapse-down </p><br>
							<p><i class="glyphicon glyphicon-collapse-up fa-fw"></i> glyphicon-collapse-up </p><br>
							<p><i class="glyphicon glyphicon-comment fa-fw"></i> glyphicon-comment </p><br>
							<p><i class="glyphicon glyphicon-compressed fa-fw"></i> glyphicon-compressed </p><br>
							<p><i class="glyphicon glyphicon-console fa-fw"></i> glyphicon-console </p><br>
							<p><i class="glyphicon glyphicon-copy fa-fw"></i> glyphicon-copy </p><br>
							<p><i class="glyphicon glyphicon-copyright-mark fa-fw"></i> glyphicon-copyright-mark </p><br>
							<p><i class="glyphicon glyphicon-credit-card fa-fw"></i> glyphicon-credit-card </p><br>
							<p><i class="glyphicon glyphicon-cutlery fa-fw"></i> glyphicon-cutlery </p><br>
							<p><i class="glyphicon glyphicon-dashboard fa-fw"></i> glyphicon-dashboard </p><br>
							<p><i class="glyphicon glyphicon-download fa-fw"></i> glyphicon-download </p><br>
							<p><i class="glyphicon glyphicon-download-alt fa-fw"></i> glyphicon-download-alt </p><br>
							<p><i class="glyphicon glyphicon-duplicate fa-fw"></i> glyphicon-duplicate </p><br>
							<p><i class="glyphicon glyphicon-earphone fa-fw"></i> glyphicon-earphone </p><br>
							<p><i class="glyphicon glyphicon-edit fa-fw"></i> glyphicon-edit </p><br>
							<p><i class="glyphicon glyphicon-education fa-fw"></i> glyphicon-education </p><br>
							<p><i class="glyphicon glyphicon-eject fa-fw"></i> glyphicon-eject </p><br>
							<p><i class="glyphicon glyphicon-envelope fa-fw"></i> glyphicon-envelope </p><br>
							<p><i class="glyphicon glyphicon-equalizer fa-fw"></i> glyphicon-equalizer </p><br>
							<p><i class="glyphicon glyphicon-erase fa-fw"></i> glyphicon-erase </p><br>
							<p><i class="glyphicon glyphicon-eur fa-fw"></i> glyphicon-eur </p><br>
							<p><i class="glyphicon glyphicon-euro fa-fw"></i> glyphicon-euro </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="glyphicon glyphicon-exclamation-sign fa-fw"></i> glyphicon-exclamation-sign </p><br>
							<p><i class="glyphicon glyphicon-expand fa-fw"></i> glyphicon-expand </p><br>
							<p><i class="glyphicon glyphicon-export fa-fw"></i> glyphicon-export </p><br>
							<p><i class="glyphicon glyphicon-eye-close fa-fw"></i> glyphicon-eye-close </p><br>
							<p><i class="glyphicon glyphicon-eye-open fa-fw"></i> glyphicon-eye-open </p><br>
							<p><i class="glyphicon glyphicon-facetime-video fa-fw"></i> glyphicon-facetime-video </p><br>
							<p><i class="glyphicon glyphicon-fast-backward fa-fw"></i> glyphicon-fast-backward </p><br>
							<p><i class="glyphicon glyphicon-fast-forward fa-fw"></i> glyphicon-fast-forward </p><br>
							<p><i class="glyphicon glyphicon-file fa-fw"></i> glyphicon-file </p><br>
							<p><i class="glyphicon glyphicon-film fa-fw"></i> glyphicon-film </p><br>
							<p><i class="glyphicon glyphicon-filter fa-fw"></i> glyphicon-filter </p><br>
							<p><i class="glyphicon glyphicon-fire fa-fw"></i> glyphicon-fire </p><br>
							<p><i class="glyphicon glyphicon-flag fa-fw"></i> glyphicon-flag </p><br>
							<p><i class="glyphicon glyphicon-flash fa-fw"></i> glyphicon-flash </p><br>
							<p><i class="glyphicon glyphicon-floppy-disk fa-fw"></i> glyphicon-floppy-disk </p><br>
							<p><i class="glyphicon glyphicon-floppy-open fa-fw"></i> glyphicon-floppy-open </p><br>
							<p><i class="glyphicon glyphicon-floppy-remove fa-fw"></i> glyphicon-floppy-remove </p><br>
							<p><i class="glyphicon glyphicon-floppy-save fa-fw"></i> glyphicon-floppy-save </p><br>
							<p><i class="glyphicon glyphicon-floppy-saved fa-fw"></i> glyphicon-floppy-saved </p><br>
							<p><i class="glyphicon glyphicon-folder-close fa-fw"></i> glyphicon-folder-close </p><br>
							<p><i class="glyphicon glyphicon-folder-open fa-fw"></i> glyphicon-folder-open </p><br>
							<p><i class="glyphicon glyphicon-font fa-fw"></i> glyphicon-font </p><br>
							<p><i class="glyphicon glyphicon-forward fa-fw"></i> glyphicon-forward </p><br>
							<p><i class="glyphicon glyphicon-fullscreen fa-fw"></i> glyphicon-fullscreen </p><br>
							<p><i class="glyphicon glyphicon-gbp fa-fw"></i> glyphicon-gbp </p><br>
							<p><i class="glyphicon glyphicon-gift fa-fw"></i> glyphicon-gift </p><br>
							<p><i class="glyphicon glyphicon-glass fa-fw"></i> glyphicon-glass </p><br>
							<p><i class="glyphicon glyphicon-globe fa-fw"></i> glyphicon-globe </p><br>
							<p><i class="glyphicon glyphicon-grain fa-fw"></i> glyphicon-grain </p><br>
							<p><i class="glyphicon glyphicon-hand-down fa-fw"></i> glyphicon-hand-down </p><br>
							<p><i class="glyphicon glyphicon-hand-left fa-fw"></i> glyphicon-hand-left </p><br>
							<p><i class="glyphicon glyphicon-hand-right fa-fw"></i> glyphicon-hand-right </p><br>
							<p><i class="glyphicon glyphicon-hand-up fa-fw"></i> glyphicon-hand-up </p><br>
							<p><i class="glyphicon glyphicon-hd-video fa-fw"></i> glyphicon-hd-video </p><br>
							<p><i class="glyphicon glyphicon-hdd fa-fw"></i> glyphicon-hdd </p><br>
							<p><i class="glyphicon glyphicon-header fa-fw"></i> glyphicon-header </p><br>
							<p><i class="glyphicon glyphicon-headphones fa-fw"></i> glyphicon-headphones </p><br>
							<p><i class="glyphicon glyphicon-heart fa-fw"></i> glyphicon-heart </p><br>
							<p><i class="glyphicon glyphicon-heart-empty fa-fw"></i> glyphicon-heart-empty </p><br>
							<p><i class="glyphicon glyphicon-home fa-fw"></i> glyphicon-home </p><br>
							<p><i class="glyphicon glyphicon-hourglass fa-fw"></i> glyphicon-hourglass </p><br>
							<p><i class="glyphicon glyphicon-ice-lolly fa-fw"></i> glyphicon-ice-lolly </p><br>
							<p><i class="glyphicon glyphicon-ice-lolly-tasted fa-fw"></i> glyphicon-ice-lolly-tasted </p><br>
							<p><i class="glyphicon glyphicon-import fa-fw"></i> glyphicon-import </p><br>
							<p><i class="glyphicon glyphicon-inbox fa-fw"></i> glyphicon-inbox </p><br>
							<p><i class="glyphicon glyphicon-indent-left fa-fw"></i> glyphicon-indent-left </p><br>
							<p><i class="glyphicon glyphicon-indent-right fa-fw"></i> glyphicon-indent-right </p><br>
							<p><i class="glyphicon glyphicon-info-sign fa-fw"></i> glyphicon-info-sign </p><br>
							<p><i class="glyphicon glyphicon-italic fa-fw"></i> glyphicon-italic </p><br>
							<p><i class="glyphicon glyphicon-jpy fa-fw"></i> glyphicon-jpy </p><br>
							<p><i class="glyphicon glyphicon-king fa-fw"></i> glyphicon-king </p><br>
							<p><i class="glyphicon glyphicon-knight fa-fw"></i> glyphicon-knight </p><br>
							<p><i class="glyphicon glyphicon-lamp fa-fw"></i> glyphicon-lamp </p><br>
							<p><i class="glyphicon glyphicon-leaf fa-fw"></i> glyphicon-leaf </p><br>
							<p><i class="glyphicon glyphicon-level-up fa-fw"></i> glyphicon-level-up </p><br>
							<p><i class="glyphicon glyphicon-link fa-fw"></i> glyphicon-link </p><br>
							<p><i class="glyphicon glyphicon-list fa-fw"></i> glyphicon-list </p><br>
							<p><i class="glyphicon glyphicon-list-alt fa-fw"></i> glyphicon-list-alt </p><br>
							<p><i class="glyphicon glyphicon-lock fa-fw"></i> glyphicon-lock </p><br>
							<p><i class="glyphicon glyphicon-log-in fa-fw"></i> glyphicon-log-in </p><br>
							<p><i class="glyphicon glyphicon-log-out fa-fw"></i> glyphicon-log-out </p><br>
							<p><i class="glyphicon glyphicon-magnet fa-fw"></i> glyphicon-magnet </p><br>
							<p><i class="glyphicon glyphicon-map-marker fa-fw"></i> glyphicon-map-marker </p><br>
							<p><i class="glyphicon glyphicon-menu-down fa-fw"></i> glyphicon-menu-down </p><br>
							<p><i class="glyphicon glyphicon-menu-hamburger fa-fw"></i> glyphicon-menu-hamburger </p><br>
							<p><i class="glyphicon glyphicon-menu-left fa-fw"></i> glyphicon-menu-left </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="glyphicon glyphicon-menu-right fa-fw"></i> glyphicon-menu-right </p><br>
							<p><i class="glyphicon glyphicon-menu-up fa-fw"></i> glyphicon-menu-up </p><br>
							<p><i class="glyphicon glyphicon-minus fa-fw"></i> glyphicon-minus </p><br>
							<p><i class="glyphicon glyphicon-minus-sign fa-fw"></i> glyphicon-minus-sign </p><br>
							<p><i class="glyphicon glyphicon-modal-window fa-fw"></i> glyphicon-modal-window </p><br>
							<p><i class="glyphicon glyphicon-move fa-fw"></i> glyphicon-move </p><br>
							<p><i class="glyphicon glyphicon-music fa-fw"></i> glyphicon-music </p><br>
							<p><i class="glyphicon glyphicon-new-window fa-fw"></i> glyphicon-new-window </p><br>
							<p><i class="glyphicon glyphicon-object-align-bottom fa-fw"></i> glyphicon-object-align-bottom </p><br>
							<p><i class="glyphicon glyphicon-object-align-horizontal fa-fw"></i> glyphicon-object-align-horizontal </p><br>
							<p><i class="glyphicon glyphicon-object-align-left fa-fw"></i> glyphicon-object-align-left </p><br>
							<p><i class="glyphicon glyphicon-object-align-right fa-fw"></i> glyphicon-object-align-right </p><br>
							<p><i class="glyphicon glyphicon-object-align-top fa-fw"></i> glyphicon-object-align-top </p><br>
							<p><i class="glyphicon glyphicon-object-align-vertical fa-fw"></i> glyphicon-object-align-vertical </p><br>
							<p><i class="glyphicon glyphicon-off fa-fw"></i> glyphicon-off </p><br>
							<p><i class="glyphicon glyphicon-oil fa-fw"></i> glyphicon-oil </p><br>
							<p><i class="glyphicon glyphicon-ok fa-fw"></i> glyphicon-ok </p><br>
							<p><i class="glyphicon glyphicon-ok-circle fa-fw"></i> glyphicon-ok-circle </p><br>
							<p><i class="glyphicon glyphicon-ok-sign fa-fw"></i> glyphicon-ok-sign </p><br>
							<p><i class="glyphicon glyphicon-open fa-fw"></i> glyphicon-open </p><br>
							<p><i class="glyphicon glyphicon-open-file fa-fw"></i> glyphicon-open-file </p><br>
							<p><i class="glyphicon glyphicon-option-horizontal fa-fw"></i> glyphicon-option-horizontal </p><br>
							<p><i class="glyphicon glyphicon-option-vertical fa-fw"></i> glyphicon-option-vertical </p><br>
							<p><i class="glyphicon glyphicon-paperclip fa-fw"></i> glyphicon-paperclip </p><br>
							<p><i class="glyphicon glyphicon-paste fa-fw"></i> glyphicon-paste </p><br>
							<p><i class="glyphicon glyphicon-pause fa-fw"></i> glyphicon-pause </p><br>
							<p><i class="glyphicon glyphicon-pawn fa-fw"></i> glyphicon-pawn </p><br>
							<p><i class="glyphicon glyphicon-pencil fa-fw"></i> glyphicon-pencil </p><br>
							<p><i class="glyphicon glyphicon-phone fa-fw"></i> glyphicon-phone </p><br>
							<p><i class="glyphicon glyphicon-phone-alt fa-fw"></i> glyphicon-phone-alt </p><br>
							<p><i class="glyphicon glyphicon-picture fa-fw"></i> glyphicon-picture </p><br>
							<p><i class="glyphicon glyphicon-piggy-bank fa-fw"></i> glyphicon-piggy-bank </p><br>
							<p><i class="glyphicon glyphicon-plane fa-fw"></i> glyphicon-plane </p><br>
							<p><i class="glyphicon glyphicon-play fa-fw"></i> glyphicon-play </p><br>
							<p><i class="glyphicon glyphicon-play-circle fa-fw"></i> glyphicon-play-circle </p><br>
							<p><i class="glyphicon glyphicon-plus fa-fw"></i> glyphicon-plus </p><br>
							<p><i class="glyphicon glyphicon-plus-sign fa-fw"></i> glyphicon-plus-sign </p><br>
							<p><i class="glyphicon glyphicon-print fa-fw"></i> glyphicon-print </p><br>
							<p><i class="glyphicon glyphicon-pushpin fa-fw"></i> glyphicon-pushpin </p><br>
							<p><i class="glyphicon glyphicon-qrcode fa-fw"></i> glyphicon-qrcode </p><br>
							<p><i class="glyphicon glyphicon-queen fa-fw"></i> glyphicon-queen </p><br>
							<p><i class="glyphicon glyphicon-question-sign fa-fw"></i> glyphicon-question-sign </p><br>
							<p><i class="glyphicon glyphicon-random fa-fw"></i> glyphicon-random </p><br>
							<p><i class="glyphicon glyphicon-record fa-fw"></i> glyphicon-record </p><br>
							<p><i class="glyphicon glyphicon-refresh fa-fw"></i> glyphicon-refresh </p><br>
							<p><i class="glyphicon glyphicon-registration-mark fa-fw"></i> glyphicon-registration-mark </p><br>
							<p><i class="glyphicon glyphicon-remove fa-fw"></i> glyphicon-remove </p><br>
							<p><i class="glyphicon glyphicon-remove-circle fa-fw"></i> glyphicon-remove-circle </p><br>
							<p><i class="glyphicon glyphicon-remove-sign fa-fw"></i> glyphicon-remove-sign </p><br>
							<p><i class="glyphicon glyphicon-repeat fa-fw"></i> glyphicon-repeat </p><br>
							<p><i class="glyphicon glyphicon-resize-full fa-fw"></i> glyphicon-resize-full </p><br>
							<p><i class="glyphicon glyphicon-resize-horizontal fa-fw"></i> glyphicon-resize-horizontal </p><br>
							<p><i class="glyphicon glyphicon-resize-small fa-fw"></i> glyphicon-resize-small </p><br>
							<p><i class="glyphicon glyphicon-resize-vertical fa-fw"></i> glyphicon-resize-vertical </p><br>
							<p><i class="glyphicon glyphicon-retweet fa-fw"></i> glyphicon-retweet </p><br>
							<p><i class="glyphicon glyphicon-road fa-fw"></i> glyphicon-road </p><br>
							<p><i class="glyphicon glyphicon-rub fa-fw"></i> glyphicon-rub </p><br>
							<p><i class="glyphicon glyphicon-ruble fa-fw"></i> glyphicon-ruble </p><br>
							<p><i class="glyphicon glyphicon-save fa-fw"></i> glyphicon-save </p><br>
							<p><i class="glyphicon glyphicon-save-file fa-fw"></i> glyphicon-save-file </p><br>
							<p><i class="glyphicon glyphicon-saved fa-fw"></i> glyphicon-saved </p><br>
							<p><i class="glyphicon glyphicon-scale fa-fw"></i> glyphicon-scale </p><br>
							<p><i class="glyphicon glyphicon-scissors fa-fw"></i> glyphicon-scissors </p><br>
							<p><i class="glyphicon glyphicon-screenshot fa-fw"></i> glyphicon-screenshot </p><br>
							<p><i class="glyphicon glyphicon-sd-video fa-fw"></i> glyphicon-sd-video </p><br>
							<p><i class="glyphicon glyphicon-search fa-fw"></i> glyphicon-search </p><br>
						</div>
						<div class="fa col-lg-3">
							<p><i class="glyphicon glyphicon-send fa-fw"></i> glyphicon-send </p><br>
							<p><i class="glyphicon glyphicon-share fa-fw"></i> glyphicon-share </p><br>
							<p><i class="glyphicon glyphicon-share-alt fa-fw"></i> glyphicon-share-alt </p><br>
							<p><i class="glyphicon glyphicon-shopping-cart fa-fw"></i> glyphicon-shopping-cart </p><br>
							<p><i class="glyphicon glyphicon-signal fa-fw"></i> glyphicon-signal </p><br>
							<p><i class="glyphicon glyphicon-sort fa-fw"></i> glyphicon-sort </p><br>
							<p><i class="glyphicon glyphicon-sort-by-alphabet fa-fw"></i> glyphicon-sort-by-alphabet </p><br>
							<p><i class="glyphicon glyphicon-sort-by-alphabet-alt fa-fw"></i> glyphicon-sort-by-alphabet-alt </p><br>
							<p><i class="glyphicon glyphicon-sort-by-attributes fa-fw"></i> glyphicon-sort-by-attributes </p><br>
							<p><i class="glyphicon glyphicon-sort-by-attributes-alt fa-fw"></i> glyphicon-sort-by-attributes-alt </p><br>
							<p><i class="glyphicon glyphicon-sort-by-order fa-fw"></i> glyphicon-sort-by-order </p><br>
							<p><i class="glyphicon glyphicon-sort-by-order-alt fa-fw"></i> glyphicon-sort-by-order-alt </p><br>
							<p><i class="glyphicon glyphicon-sound-5-1 fa-fw"></i> glyphicon-sound-5-1 </p><br>
							<p><i class="glyphicon glyphicon-sound-6-1 fa-fw"></i> glyphicon-sound-6-1 </p><br>
							<p><i class="glyphicon glyphicon-sound-7-1 fa-fw"></i> glyphicon-sound-7-1 </p><br>
							<p><i class="glyphicon glyphicon-sound-dolby fa-fw"></i> glyphicon-sound-dolby </p><br>
							<p><i class="glyphicon glyphicon-sound-stereo fa-fw"></i> glyphicon-sound-stereo </p><br>
							<p><i class="glyphicon glyphicon-star fa-fw"></i> glyphicon-star </p><br>
							<p><i class="glyphicon glyphicon-star-empty fa-fw"></i> glyphicon-star-empty </p><br>
							<p><i class="glyphicon glyphicon-stats fa-fw"></i> glyphicon-stats </p><br>
							<p><i class="glyphicon glyphicon-step-backward fa-fw"></i> glyphicon-step-backward </p><br>
							<p><i class="glyphicon glyphicon-step-forward fa-fw"></i> glyphicon-step-forward </p><br>
							<p><i class="glyphicon glyphicon-stop fa-fw"></i> glyphicon-stop </p><br>
							<p><i class="glyphicon glyphicon-subscript fa-fw"></i> glyphicon-subscript </p><br>
							<p><i class="glyphicon glyphicon-subtitles fa-fw"></i> glyphicon-subtitles </p><br>
							<p><i class="glyphicon glyphicon-sunglasses fa-fw"></i> glyphicon-sunglasses </p><br>
							<p><i class="glyphicon glyphicon-superscript fa-fw"></i> glyphicon-superscript </p><br>
							<p><i class="glyphicon glyphicon-tag fa-fw"></i> glyphicon-tag </p><br>
							<p><i class="glyphicon glyphicon-tags fa-fw"></i> glyphicon-tags </p><br>
							<p><i class="glyphicon glyphicon-tasks fa-fw"></i> glyphicon-tasks </p><br>
							<p><i class="glyphicon glyphicon-tent fa-fw"></i> glyphicon-tent </p><br>
							<p><i class="glyphicon glyphicon-text-background fa-fw"></i> glyphicon-text-background </p><br>
							<p><i class="glyphicon glyphicon-text-color fa-fw"></i> glyphicon-text-color </p><br>
							<p><i class="glyphicon glyphicon-text-height fa-fw"></i> glyphicon-text-height </p><br>
							<p><i class="glyphicon glyphicon-text-size fa-fw"></i> glyphicon-text-size </p><br>
							<p><i class="glyphicon glyphicon-text-width fa-fw"></i> glyphicon-text-width </p><br>
							<p><i class="glyphicon glyphicon-th fa-fw"></i> glyphicon-th </p><br>
							<p><i class="glyphicon glyphicon-th-large fa-fw"></i> glyphicon-th-large </p><br>
							<p><i class="glyphicon glyphicon-th-list fa-fw"></i> glyphicon-th-list </p><br>
							<p><i class="glyphicon glyphicon-thumbs-down fa-fw"></i> glyphicon-thumbs-down </p><br>
							<p><i class="glyphicon glyphicon-thumbs-up fa-fw"></i> glyphicon-thumbs-up </p><br>
							<p><i class="glyphicon glyphicon-time fa-fw"></i> glyphicon-time </p><br>
							<p><i class="glyphicon glyphicon-tint fa-fw"></i> glyphicon-tint </p><br>
							<p><i class="glyphicon glyphicon-tower fa-fw"></i> glyphicon-tower </p><br>
							<p><i class="glyphicon glyphicon-transfer fa-fw"></i> glyphicon-transfer </p><br>
							<p><i class="glyphicon glyphicon-trash fa-fw"></i> glyphicon-trash </p><br>
							<p><i class="glyphicon glyphicon-tree-conifer fa-fw"></i> glyphicon-tree-conifer </p><br>
							<p><i class="glyphicon glyphicon-tree-deciduous fa-fw"></i> glyphicon-tree-deciduous </p><br>
							<p><i class="glyphicon glyphicon-triangle-bottom fa-fw"></i> glyphicon-triangle-bottom </p><br>
							<p><i class="glyphicon glyphicon-triangle-left fa-fw"></i> glyphicon-triangle-left </p><br>
							<p><i class="glyphicon glyphicon-triangle-right fa-fw"></i> glyphicon-triangle-right </p><br>
							<p><i class="glyphicon glyphicon-triangle-top fa-fw"></i> glyphicon-triangle-top </p><br>
							<p><i class="glyphicon glyphicon-unchecked fa-fw"></i> glyphicon-unchecked </p><br>
							<p><i class="glyphicon glyphicon-upload fa-fw"></i> glyphicon-upload </p><br>
							<p><i class="glyphicon glyphicon-usd fa-fw"></i> glyphicon-usd </p><br>
							<p><i class="glyphicon glyphicon-user fa-fw"></i> glyphicon-user </p><br>
							<p><i class="glyphicon glyphicon-volume-down fa-fw"></i> glyphicon-volume-down </p><br>
							<p><i class="glyphicon glyphicon-volume-off fa-fw"></i> glyphicon-volume-off </p><br>
							<p><i class="glyphicon glyphicon-volume-up fa-fw"></i> glyphicon-volume-up </p><br>
							<p><i class="glyphicon glyphicon-warning-sign fa-fw"></i> glyphicon-warning-sign </p><br>
							<p><i class="glyphicon glyphicon-wrench fa-fw"></i> glyphicon-wrench </p><br>
							<p><i class="glyphicon glyphicon-xbt fa-fw"></i> glyphicon-xbt </p><br>
							<p><i class="glyphicon glyphicon-yen fa-fw"></i> glyphicon-yen </p><br>
							<p><i class="glyphicon glyphicon-zoom-in fa-fw"></i> glyphicon-zoom-in </p><br>
							<p><i class="glyphicon glyphicon-zoom-out fa-fw"></i> glyphicon-zoom-out </p><br>
						</div>
					</div>
				</div>
			</div><!-- / Glyphicons -->

		</div>
	</div>
</div><!-- /#content-wrapper -->
