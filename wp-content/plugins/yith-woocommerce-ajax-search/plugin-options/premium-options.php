<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @author YITH <plugins@yithemes.com>
 * @package YITH WooCommerce Ajax Search
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


return array(
	'premium' => array(
		'home' => array(
			'type'         => 'custom_tab',
			'action'       => 'yith_ajax_search_premium',
			'hide_sidebar' => true,
		),
	),
);
