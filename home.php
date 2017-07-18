<?php // @Layout name: Home ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="home">
	<div class="home-splash" <?php echo ipSlot('bkgImage'); ?>>
		<?php echo ipBlock('banner'); ?>
	</div>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
