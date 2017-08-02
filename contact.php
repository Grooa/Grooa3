<?php // @Layout name: Contact ?>

<?php
$hasPageImage = false;

if (in_array('PageImage', \Ip\Internal\Plugins\Service::getActivePluginNames())) {
    $hasPageImage = !empty(\Plugin\PageImage\Model::getPageImages(ipContent()->getCurrentPage()->getId()));
}
?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="contact">
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
