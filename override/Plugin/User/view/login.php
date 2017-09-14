<section class="ipWidget">
    <?php echo ipRenderWidget('Heading', array('title' => __('Login', 'User', false))) ?>
    <p class="center introduction">
        Login to access your purchased online courses,
        manage your email subscription and profile details
    </p>
</section>

<section class="ipWidget object">
    <?php echo $form->render() ?>

    <section class="horizontal">
        <p class="centered">
            <a class="ipUserRegistrationLink" href="<?= escAttr($registrationUrl) ?>"><?php _e('Register', 'User') ?></a>
        </p>
        <p class="centered">
            <a class="ipUserPasswordResetLink" href="<?= escAttr($passwordResetUrl) ?>"><?php _e('Forgot password', 'User') ?></a>
        </p>
    </section>
</section>

<div class="modern-spacing" style="height: 30px"></div>