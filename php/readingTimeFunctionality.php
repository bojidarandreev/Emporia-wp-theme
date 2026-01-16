<!-- function gp_reading_time() {
$article = get_post_field( 'post_content', $post->ID ); //gets full text from article
$wordcount = str_word_count( strip_tags( $article ) ); //removes html tags
$time = ceil($wordcount / 250); //takes rounded of words divided by 250 words per minute
if ($time == 1) { //grammar conversion
$label = " minute";} 
else {
$label = " minutes";
}
$totalString = $time . $label; //adds time with minute/minutes label
return $totalString;
} -->