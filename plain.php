<?php // @Layout name: Plain ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main>
    <?php if ($hasPageImage): ?>
        <div class="banner">
            <div class="image-container <?= !empty($useBlur) ? 'blurred' : '' ?>">
                <div class="image" <?php echo ipSlot('bkgImage'); ?>></div>
            </div>
            <div class="banner-block">
                <?= ipBlock('banner') ?>
            </div>
        </div>
    <?php endif; ?>

    <div>
        <?php echo ipBlock('main'); ?>
    </div>
</main>

<?php echo ipView('_footer.php')->render(); ?>
