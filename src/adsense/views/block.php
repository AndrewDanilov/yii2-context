<?php
/* @var $this \yii\web\View */
/* @var $client string */
/* @var $slot int */
/* @var $format string */
/* @var $layout string */
/* @var $fullWidthResponsive bool */
?>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="<?= $client ?>"
     data-ad-slot="<?= $slot ?>"
     data-ad-format="<?= $format ?>"
     <?php if ($layout !== null) { ?>data-ad-layout="<?= $layout ?>"<?php } ?>
     <?php if ($fullWidthResponsive !== null) { ?>data-full-width-responsive="<?= $fullWidthResponsive ? 'true' : 'false' ?>"<?php } ?>></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>