<?php // @Layout name: Main ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<div class="cover-image <?=!empty($useBlur) ? 'blurred' : ''?>">
    <div class="main-image" <?php echo ipSlot('bkgImage'); ?>></div>
</div>
<main>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
