	<div id="sidebar">
		<ul>
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar() ) : ?>

			<li><h2><?php esc_html_e( 'Archives', 'gpp' ); ?></h2>
				<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>
			
				<?php wp_list_bookmarks(); ?>

				<li><h2><?php esc_html_e( 'Meta', 'gpp' ); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><?php esc_html_e('Valid', 'gpp'); ?> <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>			

			<?php endif; ?>
		</ul>
	</div>

