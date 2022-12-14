<?php
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'KFF_Radio_Field' ) ) {
	class KFF_Radio_Field {
		static function template( $field, $post_metas ) {

			$field = wp_parse_args( $field, array(
				'options' => array(),
				'default' => '',
				'inline'  => false
			) );

			$field['subtitle'] = isset( $field['subtitle'] ) ? '<p class="kungfu-form-sub-title">' . $field['subtitle'] . '</p>' : '';
			$field['desc']     = isset( $field['desc'] ) ? '<p class="kungfu-form-description">' . $field['desc'] . '</p>' : '';

			$classes = array(
				'kungfu-radio-field'
			);

			if ( $field['inline'] ) {
				$classes[] = 'kungfu-list-inline';
			}

			$value = isset( $post_metas[ $field['id'] ] ) ? $post_metas[ $field['id'] ] : $field['default'];

			$list = '';
			if ( ! empty( $field['options'] ) ) {
				$list .= '<ul class="' . implode( ' ', $classes ) . '">';
				$tpl  = '<li><label><input type="radio" class="kungfu-radio" name="%s" value="%s" %s /> %s</label></li>';

				foreach ( $field['options'] as $val => $label ) {
					$list .= sprintf( $tpl, $field['id'], $val, checked( $val, $value, false ), $label );
				}
				$list .= '</ul>';
			}

			return sprintf(
				'<div class="kungfu-form-wrapper">
          <div class="kungfu-form-title">
            <label class="kungfu-form-label">%s</label>%s
          </div>
					<div class="kungfu-form-control">%s %s</div>
				</div>', $field['title'], $field['subtitle'], $list, $field['desc'] );
		}
	}
}