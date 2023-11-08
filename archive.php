<?php get_header(); ?>

<main class="hg_main site__blog">
        <main class="site__content">
            <?php if( have_posts() ) :
            while ( have_posts() ) {
            the_post();
            get_template_part( 'theposts' );
            }
                endif; ?>
        </main>

        <br />&nbsp;
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
</main>
<aside class="hg_left">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
    <br />&nbsp;
    <?php get_template_part( 'sidebar-left' ); ?>
    <br />&nbsp;
</aside>

<aside class="hg_right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>