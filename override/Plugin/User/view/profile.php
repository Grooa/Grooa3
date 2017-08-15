<?php echo ipRenderWidget('Heading', array('title' => __('Profile', 'User', false))); ?>
<?php if ($isProfileUpdated) { ?>
    <?php echo ipRenderWidget('Text', array('text' => '<p><span class="note">' . __('User profile has been successfully updated.', 'User') . '</span></p>')); ?>
<?php } ?>

<section class="ipWidget">
    <?=ipBlock('over')->render()?>
</section>

<section class="ipWidget">
    <?php echo $form->render() ?>
</section>

<section class="ipWidget">
    <?=ipBlock('bellow')->render()?>
</section>

<?= ipSlot("GrooaUser_shareCourses", []) ?>