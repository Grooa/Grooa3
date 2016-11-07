<?php // @Layout name: Home ?>

<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="home">
	<div class="home-splash" <?php echo ipSlot('bkgImage'); ?>>
		<div>
			<?php echo ipBlock('splash'); ?>
		</div>
	</div>
	<?php echo ipBlock('banner'); ?>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
