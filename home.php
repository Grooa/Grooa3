<?php // @Layout name: Home ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="home">
    <?php if ($hasPageImage): ?>
        <div class="banner">
            <div class="image-container <?= !empty($useBlur) ? 'blurred' : '' ?>">
                <div class="image" <?php echo ipSlot('bkgImage'); ?>></div>
            </div>
            <?= ipBlock('banner') ?>
        </div>
    <?php endif; ?>
    <?= ipBlock('introduction') ?>
    <?= empty(ipAdminId()) ? '' : '<div class="spacing">Introduction end</div>' ?>

	<?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
