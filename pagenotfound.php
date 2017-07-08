<?php // @Layout name: Forbidden ?>
<?php echo ipView('_header.php', array('headerClass' => 'above'))->render(); ?>

<main class="errors">
    <h1>Page Not Found</h1>
    <p>Cannot find the page you're looking for</p>
</main>

<?php echo ipView('_footer.php')->render(); ?>
