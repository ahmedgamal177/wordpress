<?php

if (isset($_POST['categories']) && $_POST['cities']){
	echo '<script>$("#body").html("")</script>';
	$args = array(
		'numberposts' => -1,
		'post_type' => 'Properties',
		'meta_query' => array(
			'relation' => 'OR',
			array(
				'key' => 'City',
				'value' => $_POST['cities'],
				'compare' => 'LIKE'
			),
			array(
				'key' => 'Category',
				'value' => $_POST['categories'],
				'compare' => 'LIKE'
			)
		)
	);
	$search_query = new WP_Query( $args );
	if ( $search_query->have_posts() ):
		while ( $search_query->have_posts() ) {
			$search_query->the_post();
			echo '
<img src="'.get_post_meta(get_the_ID(), 'Image', TRUE).'">
<p>
Title: '.get_the_title(get_the_ID()).'</p><p>Brief: '
			     .get_post_meta(get_the_ID(), 'Brief', TRUE).
			     '</p><p>Content: '.get_post_meta(get_the_ID(), 'Content', TRUE).'	
</p><p>Client: '.get_post_meta(get_the_ID(), 'Client', TRUE).'	
</p> <p>City: '.get_post_meta(get_the_ID(), 'City', TRUE).'</p> 
';

		}
		wp_reset_postdata();

	else:
		echo "no properties found thank you very much";
	endif;
}
else{
	header('Location: http://localhost/wordpress/home/');

}
?>