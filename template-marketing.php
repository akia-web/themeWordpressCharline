<?php
/*
* Template Name: Page Marketing
*/
?>

<?php get_header();?>
<?php while (have_posts()): the_post()?>
    <!-- <h1> <?php the_title() ?> </h1> -->
    <?php the_content() ?>

    <h3>Mes réalisations en marketing </h3>




<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=5');
?>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<?php foreach((get_the_category()) as $cat) { 
       if($cat->cat_name == 'marketing'){?>
        <div class="col">
            <div class="card">  
                <a href="<?php the_permalink()?>">
                    <img class="card-img-top"src="<?php the_post_thumbnail_url() ?>" alt="">
                </a>
                <div class="card-body">
                    <a class="card-title cha-liens" href="<?php the_permalink()?>"><?php the_title()?></a>
                    <p><?php the_excerpt()?></p>
                </div>
            </div>
        </div>

     <?php
     }
    }
?>

   
<?php endwhile; ?>
</div>


<?php endwhile; ?>
<?php get_footer();?>
