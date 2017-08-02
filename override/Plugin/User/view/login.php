<section class="ipWidget">
    <?php echo ipRenderWidget('Heading', array('title' => __('Login', 'User', false))) ?>
    <p class="center introduction">
        Login to access your purchased online courses,
        manage your email subscription and profile details
    </p>
    <?php echo $form->render() ?>
</section>
<section class="ipWidget horizontal">
    <p class="centered">
        <a class="ipUserRegistrationLink" href="<?php echo escAttr($registrationUrl) ?>"><?php _e('Register', 'User') ?></a>
    </p>
    <p class="centered">
        <a class="ipUserPasswordResetLink" href="<?php echo escAttr($passwordResetUrl) ?>"><?php _e('Forgot password', 'User') ?></a>
    </p>
</section>
