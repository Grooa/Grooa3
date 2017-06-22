<?php // @Layout name: Track ?>

<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="tracks-cover">
    <div class="cover-image <?= isset($coverTitle) ? 'blurred' : ''?>"
        <?= isset($coverImage) ?
            "style=\"background-image: url(" . ipFileUrl('file/repository/' . $coverImage) .");\"" :
            ''?>>

        <?php if(isset($coverTitle)): ?>
            <h1><?=$coverTitle?></h1>
        <?php endif; ?>
    </div>

    <article>
        <?php echo ipBlock('main'); ?>
    </article>
</main>

<?php echo ipView('_footer.php')->render(); ?>
