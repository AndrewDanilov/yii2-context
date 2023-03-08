<?php
namespace andrewdanilov\context\adsense;

use yii\base\Widget;

class Adsense extends Widget
{
	public $client;
	public $slot;
	public $format = 'auto';
	public $layout;
	public $fullWidthResponsive;

	public function run()
	{
		if (!$this->client || !$this->slot) {
			return '';
		}

        $view = $this->getView();
        $view->getAssetManager()->bundles[AdsenseAsset::class] = [
            'client' => $this->client,
        ];
        AdsenseAsset::register($view);

		return $this->render('block', [
			'client' => $this->client,
			'slot' => $this->slot,
			'format' => $this->format,
			'layout' => $this->layout,
			'fullWidthResponsive' => $this->fullWidthResponsive,
		]);
	}
}