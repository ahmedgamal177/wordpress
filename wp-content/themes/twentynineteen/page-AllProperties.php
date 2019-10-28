<?php


echo '<h1>'.get_the_title().'</h1>';
//echo'<h1>'.get_post_meta(get_the_ID(), 'Title', TRUE).'</h1>';


//echo '	<form action="" method="post">';
//while ($row = mysqli_fetch_array($sql)) {
//	$cities=$row['cities_id'];
//	$sql2 = mysqli_query($con, "SELECT cities.name FROM cities INNER JOIN properties ON properties.cities_id = cities.id WHERE cities.id =  '$cities'");
//	$city_name= mysqli_fetch_array($sql2);
$result = get_posts(array('post_type'=>'Properties'));
foreach ($result as $post){
	setup_postdata( $post );
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


//}


?>



