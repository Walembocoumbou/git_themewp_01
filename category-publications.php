<?php get_header(); ?>

<main class="hg_main site__blog">

<?php
        $queried_object = get_queried_object();
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;
        $taxonomy_name = 'category';
        $term_children = get_term_children($term_id, $taxonomy_name);

        echo '<ul class="menugauche">';
            foreach ($term_children as $child) {
                $term = get_term_by('id', $child, $taxonomy_name);
                echo '<li><a class="btn btn-default" href="' . get_term_link($child, $taxonomy_name) . '">' . $term->name . '</a></li>';
            }
        echo '</ul>';
    ?>

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