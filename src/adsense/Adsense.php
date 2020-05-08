<?php
namespace andrewdanilov\context\adsense;

use yii\base\Widget;

class Adsense extends Widget
{
	public $client;
	public $slot;
	public $format = 'auto';
	public $layout;
	public $dataFullWidthResponsive;

	public function run()
	{
		if (!$this->client || !$this->slot) {
			return '';
		}
		$assetBundle = AdsenseAsset::register($this->getView());
		$assetBundle->client = $this->client;
		return $this->render('block', [
			'client' => $this->client,
			'slot' => $this->slot,
			'format' => $this->format,
			'layout' => $this->layout,
			'dataFullWidthResponsive' => $this->dataFullWidthResponsive,
		]);
	}
}