<?php // @Layout name: Track ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="tracks-cover">

    <?php if (!empty($coverImage)): ?>
        <div class="cover-image <?= empty($coverTitle) ? 'blurred' : '' ?>"
            <?= isset($coverImage) ?
                "style=\"background-image: url(" . $coverImage . ");\"" :
                '' ?>>

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
