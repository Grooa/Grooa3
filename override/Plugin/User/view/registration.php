
<?php echo ipRenderWidget('Heading', array('title' => __('Create an account', 'User', false))); ?>

<div class="columns spaced topped">
    <div class="ipWidget ipWidget-RegisterForm">
        <?php echo $form->render() ?>
        <a href="/terms-and-conditions">Terms & conditions</a>
        <p>We will NEVER spam, rent, sell or share your e-mail address.</p>
    </div>

    <div>
        <?= ipBlock('main') ?>
    </div>
</div>

<?= ipBlock('bellow')->render() ?>
