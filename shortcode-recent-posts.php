// Recent Posts shortcode
function PROJECTNAME_recent_posts() {	
	global $post;
	$args = array(
		'cat'            => '',
		'posts_per_page' => 3,
		'order'   => 'DESC',
		'orderby' => 'post_date',
	);	
	$output = '';	
	$posts = get_posts($args);	
	foreach($posts as $post) {		
		setup_postdata($post);		
		$output .= '<li><a href="'. get_the_permalink() .'">'. get_the_title() .'</a></li>';		
	}	
	wp_reset_postdata();	
	return '<ul>'. $output .'</ul>';	
}
add_shortcode('PROJECTNAME_recent_posts', 'PROJECTNAME_recent_posts');
