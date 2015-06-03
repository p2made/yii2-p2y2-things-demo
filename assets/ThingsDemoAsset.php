<?php
/**
 * ThingsDemoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-asset-demo-theme
 * @license MIT
 */

namespace p2made\demo\Things\assets;

class ThingsDemoAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-asset-demo-theme/assets/lib';

	public $css = [
		'css/asset-demo.css',
	];

	public $depends = [
		'p2made\assets\JqueryAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\JuiAsset',
	];
}
