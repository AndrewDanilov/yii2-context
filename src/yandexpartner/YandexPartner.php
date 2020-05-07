<?php
namespace andrewdanilov\context\yandexpartner;

use Yii;
use yii\base\Widget;

class YandexPartner extends Widget
{
	public $blocks;
	public $set;

	public function run()
	{
		if (empty($this->blocks) or empty($this->set) or empty($this->blocks[$this->set])) {
			return false;
		}
		$store = Yii::$container->get('YandexPartnerStore');
		$used_rtb_blocks = $store->usedRtbBlocks;
		$id = null;
		foreach ($this->blocks[$this->set] as $blockID) {
			if (!in_array($blockID, $used_rtb_blocks)) {
				array_push($used_rtb_blocks, $blockID);
				$id = $blockID;
				break;
			}
		}
		if (empty($id)) {
			return false;
		}
		$store->usedRtbBlocks = $used_rtb_blocks;
		return $this->render('block', ['id' => $id]);
	}
}