// Remove Yoast SEO boxes in admin for specific post types
function PROJECTNAME_remove_yoast_metaboxes(){
    remove_meta_box('wpseo_meta', 'CUSTOM_POST_TYPE', 'normal');
}
add_action( 'add_meta_boxes', 'PROJECTNAME_remove_yoast_metaboxes',11 );
