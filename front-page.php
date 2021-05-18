<?php get_header(); ?>

<?php while (have_posts()): the_post()?>
    <!-- <h1> <?php the_title() ?> </h1> -->
    <?php the_content() ?>

    <h3>Mes réalisations </h3>

<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=100');
?>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
  

    <div class="col">
        <div class="card">
            <a href="<?php the_permalink() ?>" rel="bookmark">
                <img class='card-img-top'src="<?php the_post_thumbnail_url() ?>" alt="">
            </a>
        <div class="card-body">
    <a class="card-title cha-liens" href="<?php the_permalink() ?>" rel="bookmark"> <?php the_title(); ?></a>
  
  <div class="icon-card justify-content-end">
  <?php foreach((get_the_category()) as $cat) { 
    
    if($cat->cat_name == 'developpement'){
    
    echo '<img class="article-icon pull-right cha-mright" src="wp-content/uploads/2021/02/web-programming.svg">';
    }elseif($cat->cat_name == 'marketing'){
        echo '<img class="article-icon pull-right cha-mright" src="wp-content/uploads/2021/02/trend.svg">';
    }elseif($cat->cat_name == 'design'){
        echo '<img class="article-icon pull-right cha-mright" src="wp-content/uploads/2021/02/stars.svg">';
    }
} ?> 
    </div>
    </div>
    </div>
    
   </div>
   
<?php endwhile; ?>
</div> 

<?php endwhile ?>
<?php get_footer(); ?>



  
