<?php
/* @var $id integer Block ID */
?>
<!-- Yandex.RTB <?= $id ?> -->
<div id="yandex_rtb_<?= $id ?>"></div>
<script type="text/javascript">
	(function(w, d, n, s, t) {
		w[n] = w[n] || [];
		w[n].push(function() {
			Ya.Context.AdvManager.render({
				blockId: "<?= $id ?>",
				renderTo: "yandex_rtb_<?= $id ?>",
				async: true
			});
		});
		t = d.getElementsByTagName("script")[0];
		s = d.createElement("script");
		s.type = "text/javascript";
		s.src = "//an.yandex.ru/system/context.js";
		s.async = true;
		t.parentNode.insertBefore(s, t);
	})(this, this.document, "yandexContextAsyncCallbacks");
</script>