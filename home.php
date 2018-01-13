<?php // @Layout name: Home ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="home">
    <?php if ($hasPageImage): ?>
        <div class="banner">
            <div class="image-container <?= !empty($useBlur) ? 'blurred' : '' ?>">
                <div class="image" <?php echo ipSlot('bkgImage'); ?>></div>
            </div>
            <div class="banner-block">
                <section class="banner-card">
                    <?=ipSlot('text', ['id' => 'pageTitle', 'tag' => 'h1'])?>
                    <?=ipSlot('text', ['id' => 'pageIntroduction', 'tag' => 'div'])?>
                </section>
            </div>
        </div>
    <?php endif; ?>
	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
