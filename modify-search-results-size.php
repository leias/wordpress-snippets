// Modify search results output
function PROJECTNAME_change_wp_search_size($query) {
    if ( $query->is_search ) { // Make sure it is a search page
        $query->query_vars['posts_per_page'] = -1; // Change to the number of posts you would like to show
    }
    return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'PROJECTNAME_change_wp_search_size'); 
