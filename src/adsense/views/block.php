<?php
/* @var $this \yii\web\View */
/* @var $dataAdClient string */
/* @var $dataAdSlot int */
/* @var $dataAdLayout string */
/* @var $dataAdFormat string */
/* @var $dataFullWidthResponsive bool */
?>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="<?= $dataAdClient ?>"
     data-ad-slot="<?= $dataAdSlot ?>"
     <?php if ($dataAdLayout !== null) { ?>data-ad-layout="<?= $dataAdLayout ?>"<?php } ?>
     data-ad-format="<?= $dataAdFormat ?>"
     data-full-width-responsive="<?= $dataFullWidthResponsive ? 'true' : 'false' ?>"></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>