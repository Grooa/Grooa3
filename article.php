<?php // @Layout name: Article ?>

<?php
$hasPageImage = false;

if (in_array('PageImage', \Ip\Internal\Plugins\Service::getActivePluginNames())) {
    $hasPageImage = !empty(\Plugin\PageImage\Model::getPageImages(ipContent()->getCurrentPage()->getId()));
}
?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="article">
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

    <?= ipBlock('articleHeader')->asStatic() ?>
    <?= empty(ipAdminId()) ? '' : '<div class="spacing">Blog-post start</div>' ?>

    <article>
        <?php echo ipBlock('main'); ?>
    </article>

    <?= empty(ipAdminId()) ? '' : '<div class="spacing">Blog-post end</div>' ?>
    <?php echo ipBlock('bottom')->asStatic(); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
