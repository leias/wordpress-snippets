// Disable RSS Feeds
function PROJECTNAME_disable_feed() {
    wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">home page</a>!' ) );
}

add_action('do_feed', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_rdf', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_rss', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_rss2', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_atom', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_rss2_comments', 'PROJECTNAME_disable_feed', 1);
add_action('do_feed_atom_comments', 'PROJECTNAME_disable_feed', 1);

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
