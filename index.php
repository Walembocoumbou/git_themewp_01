<?php get_header(); ?>
	<main class="hg_main">
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'theposts', get_post_format() );
			} ?>
			<p>&nbsp;</p>
			<div id="pagination">
				<?php echo paginate_links(); ?>
			</div>

		<?php
		} else {
			echo '<p>Aucun résultat !</p>';
		} ?>
	</main>
	
	<aside class="hg_left">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
		<br />&nbsp;
		<?php get_template_part( 'sidebar-left' ); ?>
		<br />&nbsp;
	</aside>
	
	<aside class="hg_right">

    <br />&nbsp;<br />&nbsp;
    <br />&nbsp;<br />&nbsp;
    <div class="kepi">
        <?php get_search_form(); ?>
    </div>
    <br />&nbsp;<br />&nbsp;

	</aside>
	
<?php get_footer(); ?>