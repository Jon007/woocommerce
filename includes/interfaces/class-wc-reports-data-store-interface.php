<?php
/**
 * Reports Data Store Interface
 *
 * @version  3.5.0
 * @package  WooCommerce/Interface
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WooCommerce Reports data store interface.
 *
 * @since 3.5.0
 */
interface WC_Reports_Data_Store_Interface {

	/**
	 * Get the data based on args.
	 *
	 * @param array $args Query parameters.
	 * @return array
	 */
	public function get_data( $args );
}