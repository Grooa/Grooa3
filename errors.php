<?php // @Layout name: Errors ?>
<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="errors">
    <article>
        <h1><?=!empty($title) ? $title : "Unknown Error"?></h1>
        <?php if (!empty($description)): ?>
            <small><?=$description?></small>
        <?php endif; ?>

        <section>
            <?php echo ipBlock('main'); ?>
        </section>
    </article>
</main>

<?php echo ipView('_footer.php')->render(); ?>
