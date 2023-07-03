<?php
/**
 * Title: Default Footer
 * Slug: green_world_ev/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column column__size-half">
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column column__size-quarter"></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column column__size-quarter"></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group signature-line">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph -->
		<p>
			<?php
				echo '© '.get_bloginfo( 'name' ).', '.date('Y').'. All rights reserved.';
			?>
		</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>
		<?php
		printf(
			esc_html__( 'Designed and built by %s', 'eduvallve' ),
			'<a href="' . esc_url( __( 'https://github.com/eduvallve', 'eduvallve' ) ) . '" rel="nofollow" target="_blank">eduvallve</a>'
		)
		?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->