<?php
namespace andrewdanilov\context\adsense;

use yii\base\Widget;

class Adsense extends Widget
{
	public $dataAdClient;
	public $dataAdSlot;
	public $dataAdLayout;
	public $dataAdFormat = 'auto';
	public $dataFullWidthResponsive = true;

	public function run()
	{
		if (!$this->dataAdClient || !$this->dataAdSlot) {
			return '';
		}
		$assetBundle = AdsenseAsset::register($this->getView());
		$assetBundle->dataAdClient = $this->dataAdClient;
		return $this->render('block', [
			'dataAdClient' => $this->dataAdClient,
			'dataAdSlot' => $this->dataAdSlot,
			'dataAdLayout' => $this->dataAdLayout,
			'dataAdFormat' => $this->dataAdFormat,
			'dataFullWidthResponsive' => $this->dataFullWidthResponsive,
		]);
	}
}