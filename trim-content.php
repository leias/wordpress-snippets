// Trim Content
function trim_content($text, $max_length, $postID){
     if ( strlen($text) > $max_length ) {
          $text = apply_filters('the_content', $text);
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
     force_balance_tags( $text );
     return $text;   
}
