<?php // @Layout name: Home (with promotion) ?>

<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="home">
	<div class="home-splash" <?php echo ipSlot('bkgImage'); ?>>
		<?php echo ipBlock('promotion'); ?>
		<?php echo ipBlock('banner'); ?>
	</div>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
