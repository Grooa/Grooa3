<?php // @Layout name: Main ?>

<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<div class="main-image" <?php echo ipSlot('bkgImage'); ?>></div>
<main>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
