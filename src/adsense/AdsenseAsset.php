<?php
namespace andrewdanilov\context\adsense;

use yii\web\AssetBundle;

class AdsenseAsset extends AssetBundle
{
	public $dataAdClient;

	public $sourcePath = null;
	public $css = [];
	public $js = [
		'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js',
	];

	public function init()
	{
		parent::init();
		$this->jsOptions['async'] = 'async';
		$this->jsOptions['position'] = \yii\web\View::POS_HEAD;
		if (isset($this->dataAdClient)) {
			$this->jsOptions['data-ad-client'] = $this->dataAdClient;
		}
	}
}