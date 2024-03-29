<?php get_header(); ?>

<main class="hg_main site__blog">
 
    <?php
        $queried_object = get_queried_object();
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;
        $taxonomy_name = 'category';
        $term_children = get_term_children($term_id, $taxonomy_name); ?>
 
        <div class="hg_rubrique">
        <?php
            echo '<ul class="mdiocese">';
    
            foreach ($term_children as $child) {
                $term = get_term_by('id', $child, $taxonomy_name);
                echo '<li><a class="" href="' . get_term_link($child, $taxonomy_name) . '">' . $term->name . '</a></li><br />';
            }
            echo '</ul>';

    ?>
    </div>

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