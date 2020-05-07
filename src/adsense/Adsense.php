<?php
namespace andrewdanilov\context\adsense;

use yii\base\Widget;

class Adsense extends Widget
{
	public $dataAdClient;
	public $dataAdSlot;
	public $dataAdFormat = 'auto';
	public $dataFullWidthResponsive = true;

	public function run()
	{
		if (!$this->dataAdClient || !$this->dataAdSlot) {
			return '';
		}
		$assetBundle = AdsenseAsset::register($this->getView());
		$assetBundle->dataAdClient = $this->dataAdClient;
		return $this->render('block');
	}
}