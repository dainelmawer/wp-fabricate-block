<?php
/**
 * @package DaineMawer\FWB_Fabricate
 */

namespace DaineMawer\FWB_Fabricate\Commands;

use WP_CLI;

class Fabricate extends \WP_CLI_Command {

	public function __invoke( $args, $assoc ) {

		\cli\line( '---' );
		\cli\line( 'Version: %Yv' . FWB_MIGRATION_VERSION );
		\cli\line( 'Author: Daine Mawer' );
		\cli\line( 'Github: https://github.com/dainemawer/wp-fabricate-block' );
		\cli\line( '---' );

	}

}

WP_CLI::add_command( 'fabricate info', __NAMESPACE__ . '\\Fabricate' );
