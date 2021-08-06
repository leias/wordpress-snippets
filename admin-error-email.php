// Change email address for admin error notifications
add_filter( 'recovery_mode_email', 'recovery_email_update', 10, 2 );
function recovery_email_update( $email, $url ) {
	$email['to'] = 'XXX@YYY.com';
	return $email;
}
