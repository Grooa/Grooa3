<?php // @Layout name: Profile ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="profile">
    <?php if ($hasPageImage): ?>
        <div class="banner">
            <div class="image-container darkest<?= !empty($useBlur) ? 'blurred' : '' ?>">
                <div class="image" <?php echo ipSlot('bkgImage'); ?>></div>
            </div>
            <?= ipBlock('banner') ?>
        </div>
    <?php endif; ?>

    <?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
