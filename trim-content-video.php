// Trim Video from Content 
function trim_content_novideo($text, $max_length, $postID){
  if ( strlen($text) > $max_length ) {
    $text = apply_filters('the_content', $text);
    $text = preg_replace('/\[(.*?)(?=\s|\])(.*?)](.*?\[\/\1])?/', '', $text);
    $text = preg_replace('/(?:https?:\/\/)?(?:www\.)?youtu(.be\/|be\.com\/watch\?v=)(\w{11})/', '', $text);
    $text = strip_tags($text, '<p><em><strong>');
    $excerpt_length = $max_length;
    if (strlen($text) > $max_length){
      $text = substr($text, 0, $max_length);
      $pos = strrpos($text, " ");
      if($pos === false) {              
        return force_balance_tags( substr($text, 0, $max_length)."...");
      }       
      return force_balance_tags( substr($text, 0, $pos)."...");
    }
  }
  return $text;
}
