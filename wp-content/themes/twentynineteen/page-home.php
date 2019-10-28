
<html>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<body id="body">
<h1><?php echo get_the_title()?></h1>
<h3>Hero Image</h3>
<?php
echo '<img src="'.get_post_meta(get_the_ID(), 'Image', TRUE).'">';
?>
	<br><br>
<form method="post" action="http://localhost/wordpress/pproperties">
		<?php
		echo "Select Cities  ";
		$unique_cities = array();
		echo "<select name='cities'>";
		$result = get_posts(array('post_type'=>'Properties'));

			foreach ( $result as $post ) {
				setup_postdata( $post );
				if( ! in_array( $result, $unique_cities ) ) {
					$unique_cities[] = $result;
				}

				echo "<option value=" . get_post_meta( get_the_ID(), 'City', true ) . '>'. get_post_meta( get_the_ID(), 'City', true ).'</option>';



		}

			echo "</select>";

		echo "  Select Categories  ";
		echo "<select id='cat' name='categories'>";
		foreach ($result as $post) {
			setup_postdata( $post );
			echo "<option value=".get_post_meta( get_the_ID(), 'Category', true ).'</option>';
			echo get_post_meta( get_the_ID(), 'Category', true );

		}
			echo "</select>";

		?>
<input id="sub" type="submit" name="button1" value="Submit"  >
</form>

<div>
    <h3>Recent Villas</h3>
    <?php

    $result= wp_get_recent_posts(array('post_type'=>'Villas',
    'posts_per_page' => 3
    ));

	foreach ($result as $post) {
		setup_postdata( $post );
		echo $post["post_title"].'<br>'.get_the_post_thumbnail($post["ID"]).'<br><br>';
	}

	?>
    
</div>
<div>
    <h3>Top Properties</h3>
    <?php
    $result = get_posts(array('post_type'=>'Properties'));
    foreach ($result as $post){
    setup_postdata( $post );
    if(get_post_meta(get_the_ID(),'Check',TRUE)==1){

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
    }
    ?>
</div>
    <h3>News</h3>
	<?php

	$result=get_posts(array(

		'post_type'=>'News',



	));

	echo '<ul>';
	foreach ($result as $post) {
		setup_postdata( $post );
		echo '<li> '.get_the_title().'</li>'.'<br>'.get_the_content().'<br><br>';
	}
	echo '</ul>';
	?>
</body>
</html>
<?php
if($_GET['button1']){ss();}
function ss(){

	echo $_GET['categories'];

//    print_r($search_query);
}
?>