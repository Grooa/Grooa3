		<footer>
			<div>
				<div class="logo">
					<img
						src="<?php echo ipThemeUrl('assets/img/logo-white.svg'); ?>"
						alt="Grooa">
				</div>
				<div class="social">
					Follow us on<br>
					<a href="<?php echo ipGetThemeOption('facebookUrl'); ?>"><img
						src="<?php echo ipThemeUrl('assets/img/facebook.svg'); ?>"
						alt="Facebook"></a>
					<a href="<?php echo ipGetThemeOption('linkedinUrl'); ?>"><img
						src="<?php echo ipThemeUrl('assets/img/linkedin.svg'); ?>"
						alt="LinkedIn"></a>
					<a href="<?php echo ipGetThemeOption('rssUrl'); ?>"><img 
						src="<?php echo ipThemeUrl('assets/img/rss.svg'); ?>"
						alt="RSS"></a>
				</div>
				<?php echo ipBlock('footer')->asStatic(); ?>
			</div>
		</footer>

		<?php echo ipJs(); ?>

	</body>
</html>
