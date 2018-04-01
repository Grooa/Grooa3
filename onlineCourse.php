<?php // @Layout name: OnlineCourse ?>

<?php echo ipView('_header.php', array(
    'headerClass' => '',
    'ogImage' => !empty($ogImage) ? (ipConfig()->baseUrl() . $ogImage) : null
))->render(); ?>
<main class="course-block">
    <?= ipBlock('main') ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
