<?php // @Layout name: Article ?>

<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="article">
	<div class="article-image" <?php echo ipSlot('bkgImage'); ?>></div>
	<article>
	<?php echo ipBlock('main'); ?>
	</article>
	<?php echo ipBlock('bottom')->asStatic(); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
