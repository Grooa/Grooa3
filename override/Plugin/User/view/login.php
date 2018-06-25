<section class="ipWidget ipWidget-UserHeader">
    <?php echo ipRenderWidget('Heading', array('title' => __('Welcome back', 'User', false))) ?>
    <p class="center introduction">
        Login to access your purchased online courses,
        manage your email subscription and other profile details.
    </p>
</section>

<section class="ipWidget ipWidget-LoginForm">
    <?= $form->render() ?>

    <p>
        <a class="ipUserPasswordResetLink" href="<?= escAttr($passwordResetUrl) ?>">
            <?php _e('Forgot password', 'User') ?>
        </a>
    </p>

    <p>
        Don't have an account? <a href="<?= escAttr($registrationUrl) ?>"><?= _e('Sign up for free', 'User') ?></a>
    </p>
</section>

<div class="modern-spacing" style="height: 30px"></div>
