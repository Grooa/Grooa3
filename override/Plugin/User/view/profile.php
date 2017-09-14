<?php
$page = ipContent()->getCurrentPage();
$title = !empty($page) ? $page->getTItle() : "Profile";
?>

<?php if ($isProfileUpdated) { ?>
    <?php echo ipRenderWidget('Text', array('text' => '<p><span class="note">' . __('User profile has been successfully updated.', 'User') . '</span></p>')); ?>
<?php } ?>

<section class="ipWidget object">
    <?php echo $form->render() ?>
</section>
