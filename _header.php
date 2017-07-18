<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

<head>
    <?php ipAddCss('assets/theme.css'); ?>
    <?php ipAddJs('assets/theme.js'); ?>
    <?php echo ipHead(); ?>
    <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false) { ?>
        <style type="text/css">
            .cover {
                display: block !important;
            }
        </style>
    <?php } ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy"
          content="default-src *; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src	'self' 'unsafe-inline' *; img-src 'self' data: *">

    <?php foreach (array(16, 32, 192) as $size) { ?>
        <link
                rel="icon"
                type="image/png"
                href="<?php echo ipThemeUrl("assets/icons/icon$size.png") ?>"
                sizes="<?php echo "${size}x${size}" ?>">
    <?php } ?>

    <?php if (ipConfig()->isDevelopmentEnvironment()) { ?>
        <script>
            document.write(
                '<script src="http://' +
                (location.host || 'localhost').split(':')[0] +
                ':35729/livereload.js?snipver=1"></' + 'script>'
            )
        </script>
    <?php } ?>

</head>

<body>

<header<?php echo empty($headerClass) ? '' : " class=\"$headerClass\""; ?>>

    <!-- Logo -->
    <a href="<?php echo ipHomeUrl() ?>" class="logo">
        <img
                src="<?php echo ipThemeUrl('assets/img/logo.svg'); ?>"
                alt="Grooa">
    </a>

    <div class="right">
        <?php
        $result = \Ip\Menu\Helper::getMenuItems('menu2', 1, 1);

        // Load profile page or user-login, if User-plugin is activated
        $modules = \Ip\Internal\Plugins\Service::getActivePluginNames();
        if (in_array('User', $modules)) {
            $userMenu = new \Ip\Menu\Item();

            $userMenu->setPageTitle(ipUser()->loggedIn() ? 'My Profile' : 'Login');
            $userMenu->setTitle(ipUser()->loggedIn() ? 'My Profile' : 'Login');
            $userMenu->setUrl(ipUser()->isLoggedIn() ?
                ipConfig()->baseUrl() . ipGetOption('User.urlAfterRegistration', 'profile') :
                ipRouteUrl('User_login'));

            $result[] = $userMenu;
        }

        echo ipSlot('menu', array(
            'items' => $result,
            'attributes' => array('class' => 'topmenu')
        ));
        ?>

        <?php
        if (count(ipContent()->getLanguages()) > 1): ?>
            <ul>
                <li data-component="dropdown">
                    <button class="language-button">
                        <?php $language = ipContent()->getCurrentLanguage(); ?>
                        <img class="flag" src="<?php echo ipThemeUrl(
                            'assets/flags/' . $language->getCode() . '.svg'
                        ); ?>" alt="">
                        Language
                    </button>

                    <?php echo ipSlot('languages', array(
                        'attributes' => array('class' => 'dropdown language-dropdown')
                    )); ?>
                </li>
            </ul>
        <?php endif; ?>

        <nav>
            <?php
            $result = \Ip\Menu\Helper::getMenuItems('menu1', 1, 1);

            echo ipSlot('menu', array(
                'items' => $result,
                'attributes' => array('class' => 'menu')
            ));
            ?>
        </nav>
    </div>
</header>
