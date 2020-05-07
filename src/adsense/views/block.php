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
     data-ad-format="<?= $dataAdFormat ?>"
     <?php if ($dataAdLayout !== null) { ?>data-ad-layout="<?= $dataAdLayout ?>"<?php } ?>
     <?php if ($dataFullWidthResponsive) { ?>data-full-width-responsive="true"<?php } ?>></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>