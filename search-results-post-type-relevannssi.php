// Display search results by post type for Relevanssi
add_filter('relevanssi_hits_filter', 'PROJECTNAME_products_first');
function PROJECTNAME_products_first($hits) {
    $types = array();
 
    // Define post types
    $types['page'] = array();
    $types['post'] = array();
    $types['product'] = array();
 
    // Split the post types in array $types
    if (!empty($hits)) {
        foreach ($hits[0] as $hit) {
            array_push($types[$hit->post_type], $hit);
        }
    }
 
    // Merge back to $hits in the desired order
    $hits[0] = array_merge($types['product'], $types['post'], $types['page']);
    return $hits;
}
