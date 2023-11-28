<?php get_header(); ?>

<phots class="phots">

</phots>

<aside class="panel.left">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
    <br />&nbsp;
    <?php get_template_part( 'sidebar-left' ); ?>
    <br />&nbsp;
</aside>

<main class="mainbody site__blog">
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

<aside class="panel.right">
    <ul>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </ul>
</aside>

<?php get_footer(); ?>