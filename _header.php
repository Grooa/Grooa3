<?php
$hasPageImage = false;
$pageImage = null;

if (in_array('PageImage', \Ip\Internal\Plugins\Service::getActivePluginNames()) &&
    !empty(ipContent()->getCurrentPage())) {

    $pageImage = \Plugin\PageImage\Model::getPageImages(ipContent()->getCurrentPage()->getId());
    $hasPageImage = !empty($pageImage);

    if ($hasPageImage) {
        $pageImage = ipFileUrl('file/repository/' . $pageImage[0]);
    }
} else if (!empty($ogImage)) {
    $hasPageImage = true;
    $pageImage = $ogImage;
}
?>

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
        <link rel="icon" type="image/png"
              href="<?=ipThemeUrl('assets/icons/icon' . $size . '.png')?>"
              sizes="<?="${size}x${size}"?>">
    <?php } ?>

    <?// Facebook Open Graph, preview settings ?>
    <?php if (!empty(ipContent()->getCurrentPage())): ?>
        <meta property="og:url" content="<?=ipContent()->getCurrentPage()->getLink()?>" />
    <?php endif; ?>

    <?php if ($hasPageImage): ?>
        <meta property="og:image" content="<?= $pageImage ?>" />
    <?php endif; ?>
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

            $userMenu->setPageTitle($loggedIn ? 'My Page' : 'Login');
            $userMenu->setTitle($loggedIn ? 'My Page' : 'Login');
            $userMenu->setUrl($loggedIn ?
                ipConfig()->baseUrl() . ipGetOption('User.urlAfterLogin', 'profile') :
                ipRouteUrl('User_login'));

            if (($loggedIn && $path == 'my-page') ||
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
