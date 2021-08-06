// Remove Plugin/Core Update Nags
function hide_update_notice() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_notices', 'hide_update_notice', 1 );

function remove_upgrade_nag() {
   echo '<style type="text/css">.update-plugins {display: none !important;}</style>';
}
add_action('admin_head', 'remove_upgrade_nag');
