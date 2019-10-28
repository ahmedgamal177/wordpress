<h1><?php
	echo '<h1>'.get_the_title().'</h1>';
	?></h1>

<?php

//while (have_posts()){
//	the_post();
//	  the_content();
//}

?>

<h3>History</h3>
  <p> <?php
	echo get_post_meta(get_the_ID(), 'History', TRUE);
    ?>
  </p>
<h3>Mission & Vision</h3>
<p> <?php
	echo get_post_meta(get_the_ID(), 'Mission', TRUE);
	?>
</p>

<h3>Team List</h3>
<?php
$result=get_posts(array(

	'post_type'=>'Team',



));

echo '<ul>';
foreach ($result as $post) {
	setup_postdata( $post );
	echo '<li>Name:  '.get_the_title().'</li>';
}
echo '</ul>';

$loop = new WP_Query( array(
	'post_type' => 'properties',
	'posts_per_page' => 12,
	'orderby' => 'post_date',
	's' => 'Category'
));

print_r($loop);
?>