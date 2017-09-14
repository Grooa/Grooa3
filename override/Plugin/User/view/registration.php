<?php echo ipRenderWidget('Heading', array('title' => __('Registration', 'User', false))); ?>

<?= ipBlock('main')->render() ?>

<section class="ipWidget object">
    <?php echo $form->render() ?>
    <a href="/terms-and-conditions">Terms & conditions</a>
	<p>We will NEVER spam, rent, sell or share your e-mail address.</p>
</section>

<?= ipBlock('bellow')->render() ?>