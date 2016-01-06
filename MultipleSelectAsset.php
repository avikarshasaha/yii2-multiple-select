<?php

namespace avikarsha\multipleselect;

use yii\web\AssetBundle;


class MultipleSelectAsset extends AssetBundle
{
	public $sourcePath = '@vendor/2amigos/yii2-multiple-select/assets';

	public $js = [
		'multiple-select.js'
	];

	public $css = [
		'multiple-select.css'
	];

	public $depends = [
		'yii\bootstrap\BootstrapPluginAsset'
	];
}
