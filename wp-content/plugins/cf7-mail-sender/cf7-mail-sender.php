<?php
/*
 * Plugin Name: CF7-Mail-Sender
 * Plugin URI: https://avinash.com/
 * Description: Just another custom contact form plugin.
 * Author: Plugin Author Name
 * Author URI: https://avinash.com/
 * License: 0.1.0
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 0.1.0
 * Requires at least: 6.3
 * Requires PHP: 7.4
 */

 add_action( 'cf7_custom_mail_sender', 'cf7_mail_sender' );

 function cf7_mail_sender( $contact_form)  {
    $title = $contact_form->title;

    if( $title === 'Contact form 1' ) {
        $submission = WPCF7_submission::get_instance();

        if ( $submission ) {
            $posted_data = $submission->get_posted_data();

            $name = $posted_data['your-name'];
            $email = $posted_data['your-email'];
            $subject = $posted_data['your-name'];

            var_dump($name);
            var_dump($email);
            var_dump($subject);

            wp_die();
        }
    }
 }
