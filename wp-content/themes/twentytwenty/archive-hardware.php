<? get_header() ?>
<main id="site-content">
    <h1 class="color-accent">Voir tous nos hardware</h1>

	<?php if ( have_posts() ) :  ?>

		<?php 

        
    // $custom_query = new WP_Query(array(
    // "post_type" => "hardware" 
    // ));

    
        // the_field('image'); // you don't need to pass the second argument. it defaults to the current post in the while loop
        // the_post_thumbnail('card-header', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']) ;
        // the_field('titre'); // you don't need to pass the second argument. it defaults to the current post in the while loop
        // the_field('prix'); // you don't need to pass the second argument. it defaults to the current post in the while loop
        // the_field('description'); // you don't need to pass the second argument. it defaults to the current post in the while loop
    
  
	?>
    <?php
        $custom_query = new WP_Query(array(
        "post_type" => "hardware" // use the name of your cpt here. The name when you register it using "register_post_type"
        ));

        while ($custom_query->have_posts()) {
        $custom_query->the_post();?>
        <h3><?php the_post_thumbnail('image');?></h3>
        <h3><?php the_field('titre');?>  <?php the_field('prix');?></h3>
        <h3><?php the_field('description');?></h3>
        <?php };
        wp_reset_postdata();
?>


	

    <?php else: ?>
        <h1>Pas d'articles</h1>
	<?php endif; ?>

</main><!-- #site-content -->
<?php get_footer() ?>