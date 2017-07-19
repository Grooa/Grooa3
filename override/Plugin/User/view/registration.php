<?php echo ipRenderWidget('Heading', array('title' => __('Registration', 'User', false))); ?>

<?= ipBlock('main')->render() ?>

<div class="ipWidget">
    <?php echo $form->render() ?>
	<p class="centered">We will NEVER spam, rent, sell or share your e-mail address.</p>
</div>

<?= ipBlock('bellow')->render() ?>