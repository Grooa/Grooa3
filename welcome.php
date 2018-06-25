<?php // @Layout name: Welcome ?>

<?php include "_pageImage.php" ?>

<?php echo ipView('_header.php', array('headerClass' => ''))->render(); ?>

<main class="welcome">

    <div class="carousel">

    </div>

    <?php echo ipBlock('main'); ?>
</main>

<?php echo ipView('_footer.php')->render(); ?>
