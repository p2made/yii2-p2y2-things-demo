<?php
/**
 * ThingsDemoAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
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
	];
}
