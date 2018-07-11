<section class="ipWidget ipWidget-UserHeader">
    <?php echo ipRenderWidget('Heading', array('title' => __('Forgot your password?', 'User', false))) ?>
    <p class="center introduction">
        <?= __('Fill in the email you registered with, and you should after a short time receive an email, with a link where you can reset your password', 'User', false) ?>
    </p>
</section>

<section class="ipWidget ipWidget-LoginForm">
    <?= $form->render() ?>
</section>
