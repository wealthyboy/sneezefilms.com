<div id="vp-pfui-format-quote-fields" class="vp-pfui-tab-content vp-pfui-elm-block" style="display: none;">
	<?php do_action( 'vp_pfui_before_quote_meta' ); ?>
	<label><?php _e( 'Source Name', 'vp-post-formats-ui' ); ?></label>
	<input type="text" name="_format_quote_source_name"
	       value="<?php echo esc_attr( get_post_meta( $post->ID, '_format_quote_source_name', true ) ); ?>"
	       id="vp-pfui-format-quote-source-name" tabindex="1"/>
	<label><?php _e( 'Source URL', 'vp-post-formats-ui' ); ?></label>
	<input type="text" name="_format_quote_source_url"
	       value="<?php echo esc_attr( get_post_meta( $post->ID, '_format_quote_source_url', true ) ); ?>"
	       id="vp-pfui-format-quote-source-url" tabindex="1"/>
	<?php do_action( 'vp_pfui_after_quote_meta' ); ?>
</div>
