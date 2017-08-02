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
        <?php
        $link = ipGetThemeOption('fav' . $size);

        if (!empty($link)): ?>
            <link rel="icon"
                  type="image/png"
                  href="<?php echo ipFileUrl('file/repository' . $link); ?>"
                  sizes="<?php echo "${size}x${size}" ?>">
            <?php
        endif;
    } ?>

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
        <?php include('assets/img/logo.svg'); ?>
        <h1>Grooa</h1>
    </a>

    <div class="navigation">
        <span id="hamburgerMenu" class="hamburger"
              title="Open menu"><?php include 'assets/icons/hamburger.svg'; ?></span>

        <?php
        $secondaryMenu = \Ip\Menu\Helper::getMenuItems('menu2', 1, 1);

        // Load profile page or user-login, if User-plugin is activated
        $modules = \Ip\Internal\Plugins\Service::getActivePluginNames();
        if (in_array('User', $modules)) {
            $userMenu = new \Ip\Menu\Item();
            $loggedIn = ipUser()->isLoggedIn();
            $path = ipRequest()->getRelativePath();

            $userMenu->setPageTitle($loggedIn ? 'My Profile' : 'Login');
            $userMenu->setTitle($loggedIn ? 'My Profile' : 'Login');
            $userMenu->setUrl($loggedIn ?
                ipConfig()->baseUrl() . ipGetOption('User.urlAfterRegistration', 'profile') :
                ipRouteUrl('User_login'));

            if (($loggedIn && $path == 'profile') ||
                (!$loggedIn && $path == 'login')
            ) {
                $userMenu->markAsCurrent(true);
            }

            $secondaryMenu[] = $userMenu;
        }

        echo ipSlot('menu', array(
            'items' => $secondaryMenu,
            'attributes' => array('class' => 'menu secondary')
        ));
        ?>

        <nav>
            <?php
            $result = \Ip\Menu\Helper::getMenuItems('menu1', 1, 1);

            echo ipSlot('menu', array(
                'items' => $result,
                'attributes' => array('class' => 'menu primary')
            ));
            ?>
        </nav>
    </div>
</header>


<div id="sideMenu" class="side-menu">
    <div class="topbar">
        <span class="spacing"></span>
        <h3>Navigation</h3>
        <?php include 'assets/icons/cross.svg'; ?>
    </div>
    <?php
    $result = \Ip\Menu\Helper::getMenuItems('menu1', 1, 1);

    echo ipSlot('menu', array(
        'items' => $result,
        'attributes' => array('class' => 'menu aside')
    ));
    ?>

    <span class="line"></span>

    <?= ipSlot('menu', [
        'items' => $secondaryMenu,
        'attributes' => ['class' => 'menu aside secondary']
    ]) ?>
</div>