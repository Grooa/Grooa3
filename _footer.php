		<footer>
			<div>
				<div class="logo">
                    <?php include('assets/img/logo-white.svg'); ?>
                    <strong>Grooa</strong>
				</div>
				<div class="social">
					<p class="centered">Follow us on</p>
                    <ul class="socialshare">
                        <li>
                            <a href="<?php echo ipGetThemeOption('facebookUrl'); ?>"
                               class="share-facebook" rel="noopener" target="_blank">
                                <?php include('assets/img/facebook.svg') ?>
                                <em>Facebook</em>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ipGetThemeOption('linkedinUrl'); ?>"
                               class="share-linkedin" rel="noopener" target="_blank">
                                <?php include('assets/img/linkedin.svg') ?>
                                <em>LinkedIn</em>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo ipGetThemeOption('twitterUrl'); ?>"
                               class="share-twitter" rel="noopener" target="_blank">
                                <?php include('assets/img/twitter.svg') ?>
                                <em>Twitter</em>
                            </a>
                        </li>
                    </ul>

				<?php	/* <a href="<?php echo ipGetThemeOption('rssUrl'); ?>"><img
						src="<?php echo ipThemeUrl('assets/img/rss.svg'); ?>"
						alt="RSS"></a> */ ?>
				</div>
				<?php echo ipBlock('footer')->asStatic(); ?>
			</div>
		</footer>

		<?php echo ipJs(); ?>

	</body>
</html>
