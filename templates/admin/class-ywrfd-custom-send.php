<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

/**
 * Outputs a custom text template for send test email in plugin options panel
 *
 * @class   YWRFD_Custom_Send
 * @package Yithemes
 * @since   1.0.0
 * @author  Your Inspiration Themes
 *
 */
class YWRFD_Custom_Send {

    /**
     * Single instance of the class
     *
     * @var \YWRFD_Custom_Send
     * @since 1.0.0
     */
    protected static $instance;

    /**
     * Returns single instance of the class
     *
     * @return \YWRFD_Custom_Send
     * @since 1.0.0
     */
    public static function get_instance() {

        if ( is_null( self::$instance ) ) {

            self::$instance = new self( $_REQUEST );

        }

        return self::$instance;
    }

    /**
     * Constructor
     *
     * @since   1.0.0
     * @return  mixed
     * @author  Alberto Ruggiero
     */
    public function __construct() {

        add_action( 'woocommerce_admin_field_ywrfd-send', array( $this, 'output' ) );

    }

    /**
     * Outputs a custom text template for send test email in plugin options panel
     *
     * @since   1.0.0
     *
     * @param   $option
     *
     * @return  void
     * @author  Alberto Ruggiero
     */
    public function output( $option ) {

        ?>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="<?php echo esc_attr( $option['field_id'] ); ?>"><?php echo esc_html( $option['title'] ); ?></label>
            </th>
            <td class="forminp forminp-custom-send">
                <input
                    name="<?php echo esc_attr( $option['field_id'] ); ?>"
                    id="<?php echo esc_attr( $option['field_id'] ); ?>"
                    type="text"
                    class="ywrfd-test-email"
                    placeholder="<?php _e( 'Type an email address to send a test email', 'yith-woocommerce-review-for-discounts' ) ?>"
                />

                <button type="button" class="button-secondary ywrfd-send-test-email"><?php _e( 'Send Test Email', 'yith-woocommerce-review-for-discounts' ); ?></button>
                <div class="ywrfd-send-result send-progress"><?php _e( 'Sending test email...', 'yith-woocommerce-review-for-discounts' ); ?></div>
            </td>
        </tr>
        <?php
    }

}

/**
 * Unique access to instance of YWRFD_Custom_Send class
 *
 * @return \YWRFD_Custom_Send
 */
function YWRFD_Custom_Send() {

    return YWRFD_Custom_Send::get_instance();

}

new YWRFD_Custom_Send();