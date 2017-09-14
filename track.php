<?php // @Layout name: Track ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="tracks-cover">

    <?php if (!empty($coverImage)): ?>
		<div class="banner">
        	<div class="image-container">
            	<div class="image" <?= isset($coverImage) ? "style=\"background-image: url(" . $coverImage . ");\"" :'' ?>></div>
        	</div>
           
			<?php if (isset($coverTitle)): ?>
                <h1><?= $coverTitle ?></h1>
            <?php endif; ?>
		</div>
    <? endif; ?>

    <article>
        <?php echo ipBlock('main'); ?>
    </article>
</main>

<?php echo ipView('_footer.php')->render(); ?>
