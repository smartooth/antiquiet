<?php if (is_home()) { ?>
	<script type="text/javascript">
	  GA_googleFillSlot("300x250_home");
	</script>
<?php } elseif (is_nsfw()) { ?>
	<script type="text/javascript">
	  GA_googleFillSlot("300x250_ratedr");
	</script>
<?php } else { ?>
	<script type="text/javascript">
	  GA_googleFillSlot("300x250_ros");
	</script>
<?php } ?>