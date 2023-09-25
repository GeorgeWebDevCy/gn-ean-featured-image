<?php
/**
 * GN EAN Featured Image
 *
 * @package       GNEANFEATU
 * @author        George Nicolaou
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   GN EAN Featured Image
 * Plugin URI:    https://www.georgenicolaou.me/plugins/gn-ean-featured-image
 * Description:   Give Product Image based on EAN and download it to media library
 * Version:       1.0.0
 * Author:        George Nicolaou
 * Author URI:    https://www.georgenicolaou.me/
 * Text Domain:   gn-ean-featured-image
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with GN EAN Featured Image. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Plugin name
define( 'GNEANFEATU_NAME',			'GN EAN Featured Image' );

// Plugin version
define( 'GNEANFEATU_VERSION',		'1.0.0' );

// Plugin Root File
define( 'GNEANFEATU_PLUGIN_FILE',	__FILE__ );

// Plugin base
define( 'GNEANFEATU_PLUGIN_BASE',	plugin_basename( GNEANFEATU_PLUGIN_FILE ) );

// Plugin Folder Path
define( 'GNEANFEATU_PLUGIN_DIR',	plugin_dir_path( GNEANFEATU_PLUGIN_FILE ) );

// Plugin Folder URL
define( 'GNEANFEATU_PLUGIN_URL',	plugin_dir_url( GNEANFEATU_PLUGIN_FILE ) );

/**
 * Load the main class for the core functionality
 */
require_once GNEANFEATU_PLUGIN_DIR . 'core/class-gn-ean-featured-image.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  George Nicolaou
 * @since   1.0.0
 * @return  object|Gn_Ean_Featured_Image
 */
function GNEANFEATU() {
	return Gn_Ean_Featured_Image::instance();
}

GNEANFEATU();
