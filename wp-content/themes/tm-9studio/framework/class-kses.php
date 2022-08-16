<?php

defined( 'ABSPATH' ) || exit;

class Insight_Kses {
	public function __construct() {
		add_filter( 'wp_kses_allowed_html', array( $this, 'wp_kses_allowed_html' ), 2, 99 );
	}

	function wp_kses_allowed_html( $allowedtags, $context ) {
		switch ( $context ) {
			case 'insight-default':
				$allowedtags = array(
					'a'      => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
					'b'      => array(),
					'strong' => array(),
					'span'   => array(
						'id'    => array(),
						'class' => array(),
					),
					'i'      => array(
						'id'    => array(),
						'class' => array(),
					),
					'p'      => array(),
					'br'     => array(),
				);
				break;
			case 'insight-price':
				$allowedtags = array(
					'a'      => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
					'b'      => array(),
					'strong' => array(),
					'span'   => array(
						'id'    => array(),
						'class' => array(),
					),
					'i'      => array(
						'id'    => array(),
						'class' => array(),
					),
					'p'      => array(),
					'del'    => array(
						'id'    => array(),
						'class' => array(),
						'style' => array(),
					),
					'ins'    => array(
						'id'    => array(),
						'class' => array(),
						'style' => array(),
					),
					'br'     => array(),
				);
				break;
			case 'insight-image':
				$allowedtags = array(
					'img' => array(
						'id'     => array(),
						'class'  => array(),
						'style'  => array(),
						'src'    => array(),
						'width'  => array(),
						'height' => array(),
						'alt'    => array(),
						'srcset' => array(),
						'sizes'  => array(),
					)
				);
				break;
			case 'insight-widget':
				$allowedtags = array(
					'h3'   => array(
						'id'    => array(),
						'class' => array(),
					),
					'div'  => array(
						'id'    => array(),
						'class' => array(),
					),
					'span' => array(
						'id'    => array(),
						'class' => array(),
					),
					'a'    => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
					'img'  => array(
						'src'   => array(),
						'alt'   => array(),
						'id'    => array(),
						'class' => array(),
					),
				);
				break;
			case 'insight-breadcrumbs':
				$allowedtags = array(
					'ul' => array(
						'class' => array(),
					),
					'li' => array(
						'class' => array(),
					),
					'a'  => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
				);
				break;
			case 'insight-title':
				$allowedtags = array(
					'h1'     => array(
						'id'    => array(),
						'class' => array(),
					),
					'h2'     => array(
						'id'    => array(),
						'class' => array(),
					),
					'h3'     => array(
						'id'    => array(),
						'class' => array(),
					),
					'a'      => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
					'span'   => array(
						'id'    => array(),
						'class' => array(),
					),
					'strong' => array(),
				);
				break;
			case 'insight-span':
				$allowedtags = array(
					'span' => array( 'id' => array(), 'class' => array() ),
				);
				break;
			case 'insight-i':
				$allowedtags = array(
					'i' => array( 'id' => array(), 'class' => array() ),
				);
				break;
			case 'insight-a':
				$allowedtags = array(
					'a' => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
				);
				break;
			case 'insight-heading':
				$allowedtags = array(
					'h1'     => array( 'id' => array(), 'class' => array() ),
					'h2'     => array( 'id' => array(), 'class' => array() ),
					'h3'     => array( 'id' => array(), 'class' => array() ),
					'h4'     => array( 'id' => array(), 'class' => array() ),
					'h5'     => array( 'id' => array(), 'class' => array() ),
					'h6'     => array( 'id' => array(), 'class' => array() ),
					'p'      => array( 'id' => array(), 'class' => array() ),
					'div'    => array( 'id' => array(), 'class' => array() ),
					'span'   => array( 'id' => array(), 'class' => array() ),
					'a'      => array(
						'id'     => array(),
						'class'  => array(),
						'href'   => array(),
						'target' => array(),
						'rel'    => array(),
						'title'  => array(),
					),
					'strong' => array(),
				);
				break;
		}

		return $allowedtags;
	}
}