<?php get_header(); ?>
<phots class="hg_phots">
</phots>

<main class="hg_main">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
    <article class="post art_fond">

      <h2><?php the_title(); ?></h2>

      <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Publié le <?php the_date(); ?>
        </p>
      </div>

      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
</main>

<aside class="hg_left">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
    <br />&nbsp;
    <?php get_template_part( 'sidebar-left' ); ?>
    <br />&nbsp;
</aside>

<aside class="hg_right">

  <br />&nbsp;<br />&nbsp;
  <div class="kepi">
      <?php get_search_form(); ?>
  </div>
  <br />&nbsp;<br />&nbsp;

      <!-- Derniers articles -->
      <p class="rss_title">Dans la même catégorie</p>

      <div class="rss_box_droit">
	  <ul>

	  <?php
		  // Get the current post id.
		  $current_post_id = get_the_ID();
		  
		  // Get the current post's category (first one if there's more than one).
		  $current_post_cats = get_the_category();
		  $current_post_first_cat_id = $current_post_cats[ 0 ]->term_id;
		  
		  // Setup arguments.
		  $args = array(
			  // Get category's posts.
			  'cat' => $current_post_first_cat_id,
			  // Exclude current post.
			  'post__not_in' => array( $current_post_id )
		  );
		  
		  // Custom query.
		  $query = new WP_Query( $args );
		  // Check that we have query results.
		  if ( $query->have_posts() ) {
			  echo '<ul class="menugauche">';
				  // Start looping over the query results.
				  while ( $query->have_posts() ) {
					  $query->the_post();
					  ?>
					  <li <?php post_class(); ?>>
						  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							  <?php the_title(); ?>
						  </a>
				</li>
				<br />
		  <?php
				  }   
			  echo '</ul>';
			  }
			  // Restore original post data.
			  wp_reset_postdata();
		  ?>

		</ul>
      </div>

</aside>

<?php get_footer(); ?>