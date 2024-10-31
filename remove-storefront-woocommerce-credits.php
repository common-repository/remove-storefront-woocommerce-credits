<?php
/*
	Plugin Name: Storefront & Woocommerce Credits remover
	Description: Remove Storefront & Woocommerce Credit
	Version: 1.0.0
	Author: Webévasion
	Author URI: https://www.webevasion.net/
*/

	class RSWC {

		public function __construct(){
			add_action('init', array($this, 'rswc_init'), 10);
		}
		
		public function rswc_init() {
			remove_action( 'storefront_footer', 'storefront_credit', 20 );
			add_action( 'storefront_footer', array($this, 'rswc_storefront_credits'), 20 );
		}
		
		function rswc_storefront_credits() {
			?>
				<div class="site-info">
					&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?>
				</div>
			<?php
		}

	}

	$RSWC = new RSWC();

?>