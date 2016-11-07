<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>

	<head>
		<?php ipAddCss('assets/theme.css'); ?>
		<?php ipAddJs('assets/theme.js'); ?>
		<?php echo ipHead(); ?>
		<?php if (strpos($_SERVER['HTTP_USER_AGENT'],'Trident') !== false) {?>
		<style type="text/css">
			.cover {
				display: block !important;
			}
		</style>
		<?php } ?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

			<a href="<?php echo ipHomeUrl() ?>" class="logo">
				<img
					src="<?php echo ipThemeUrl('assets/img/logo.svg'); ?>"
					alt="Grooa">
			</a>

			<ul class="header-controls">
				<li data-component="dropdown">
					<button class="language-button">
						<?php $language = ipContent()->getCurrentLanguage(); ?>
						<img class="flag" src="<?php echo ipThemeUrl(
							'assets/flags/' . $language->getCode() . '.svg'
						); ?>" alt="">
						<?php echo $language->longDescription; ?>
					</button>

					<?php echo ipSlot('languages', array(
							'attributes' => array('class' => 'dropdown language-dropdown')
						)); ?>
				</li>

				<!-- Only works with user module installed -->
				<?php if (false) { ?>
				<li>
				<?php if (ipUser()->loggedIn()) { ?>
					<a
						class="button"
						href="<?php echo ipGetOption('User.urlAfterRegistration'); ?>"
					>My page</a>
				<?php } else { ?>
					<a
						class="button"
						href="<?php echo ipRouteUrl('User_login'); ?>"
					>Log in</a>
				<?php } ?>
				</li>
				<?php } ?>

			</ul>

			<nav>
<?php

				$result = \Ip\Menu\Helper::getMenuItems('menu1', 1, 1);

				echo ipSlot('menu', array(
					'items' => $result,
					'attributes' => array('class' => 'menu')
				));
?>
			</nav>

		</header>
