
<?php get_header() ?>

<?php if (have_posts()) :  while (have_posts()) : the_post();?>

        <h1 class="title-single-post"> <?php the_title() ?></h1>
        <!-- <p>
            <img class="single-post-icon"src="<?php the_post_thumbnail_url() ?>" alt="">
        </p> -->

        <?php the_content() ?>
    <?php endwhile ; endif; ?>


     

<?php get_footer() ?>