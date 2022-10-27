<?php
get_header();
?>

<section class="blog">
    <h2> Najnowsze wpisy</h2>

    <?php
        $the_query = nwe WP_Query(
            array(
                'post_type' => 'post'
            )
            );
    ?>

            <?php if($the_query->have_posts()):
            while($the_query->have_posts()):
                $the_query->the_post();
            ?>

            Jeden

    <?php wp_reset_postdata();?>

</section>

<?php get_footer(); ?>