	</section>

	<footer class="site-footer" role="contentinfo">
		<div class="row">
			<div class="columns-12 column-center content-column">
				<?php
					wp_nav_menu([
						'theme_location' => 'footer',
						'container'      => false,
						'fallback_cb'	 => false,
						'menu_class'     => 'nav-menu footer-menu',
					]);
				?>
			</div>
		</div>
	</footer>

	<footer class="footer-copyright">
		<div class="row">
			<div class="columns-6 copyright-column">
				<p class="site-copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>

				<?php
					wp_nav_menu([
						'theme_location' => 'privacy',
						'container'      => false,
						'fallback_cb'	 => false,
						'menu_class'     => 'nav-menu privacy-menu',
					]);
				?>
			</div>

			<div class="columns-6 designby-column">
				<p class="site-credit">Crafted with love by <a href="http://forgeandsmith.com/" target="_blank">Forge and Smith</a>.</p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
