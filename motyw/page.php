<?php get_header(); ?>

<header class="header">
    <?php
        the_title();
    ?>
</header>

<div class="page">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>