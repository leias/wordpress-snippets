// Load FontAwesome in Admin
function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0', 'all');
}
add_action('admin_init', 'fontawesome_dashboard');
