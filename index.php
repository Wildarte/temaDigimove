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
$images_gallery = get_post_meta(38, 'gallery_imovel', true );

foreach ( (array) $images_gallery as $key => $image ) {

	$img = $desc = '';

	if ( isset( $image['imagem_imovel'] ) ) {
		$img = $image['imagem_imovel'];
	}

	if ( isset( $image['legenda_foto_imovel'] ) ) {
		$desc = $image['legenda_foto_imovel'];
	}

	// Do something with the data
	?> <img src="<?= $img; ?>" alt=""> <?php
	echo $img;
	echo $desc;
}
?>

<?php get_footer(); ?>