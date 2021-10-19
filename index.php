<?php
get_header();
?>

    <p>page index</p>

<?php
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_id The field meta id. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
$file_list_meta_id = 38;
echo $file_list_meta_id;
function cmb2_output_file_list( $file_list_meta_id, $img_size = 'medium' ) {
    echo "caiu na função";
	// Get the list of files
	$files = get_post_meta( 39, $file_list_meta_id, 1 );
    var_dump($files);
	
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
        echo "loop";
		echo '<div class="file-list-image">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</div>';
	}
	echo '</div>';
}
cmb2_output_file_list(97);
?>

<?php get_footer(); ?>