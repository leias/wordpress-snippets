// Create shortcode for display of copyright symbol plus current year
add_shortcode( 'PROJECT_copyright', 'PROJECT_copyright' );
function PROJECT_copyright( $atts ) {
	$output = '&copy;'.date('Y');	
	return $output;	
}
