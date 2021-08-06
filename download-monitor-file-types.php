// Allow different file types to be uploaded in Download Monitor
add_filter('upload_mimes','add_custom_mime_types');
function add_custom_mime_types($mimes){
	return array_merge($mimes,array (
		'ai' => 'application/postscript',
		'eps' => 'application/postscript'
	));
}
