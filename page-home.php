<?php 
// Template Name: Home

get_header();?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1><?php the_title();?></h1>
        <main><?php the_content();?></main>

        <?php do_action('dentro_da_home');?>

    <?php endwhile; endif;?>
    
<?php get_footer();?>