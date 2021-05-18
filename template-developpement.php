<?php
/*
* Template Name: Page Design
*/
?>

<?php get_header();?>
<?php while (have_posts()): the_post()?>
    <!-- <h1> <?php the_title() ?> </h1> -->
    <?php the_content() ?>

    <h3>Mes réalisations en dev </h3>

<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=100');
?>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<?php foreach((get_the_category()) as $cat) { 
       if($cat->cat_name == 'developpement'){?>
        <div class="col">
            <div class="card">  
                <a href="<?php the_permalink()?>">
                    <img class="card-img-top"src="<?php the_post_thumbnail_url() ?>" alt="">
                </a>
                <div class="card-body">
                    <div class="cha-title-card">
                        <div class="container-title">
                            <a class="card-title cha-liens" href="<?php the_permalink()?>"><?php the_title()?></a>
                        </div>
                        <?php
                        echo "<div class='truc'>";
                            foreach((get_the_category()) as $cat) {     
                            if($cat->cat_name == "wordpress"){
                            echo "<img class='article-icons cha-mleft ' src='wp-content/uploads/2021/02/wordpress.png'>";
                            }elseif($cat->cat_name == "php"){
                            echo "<img class='article-icons cha-mleft' src='wp-content/uploads/2021/02/php.svg'>";
                            }elseif($cat->cat_name == "roxo"){
                            
                            echo "<img class='article-icons cha-mleft' src='wp-content/uploads/2021/02/roxo.png'>";
                            }
                       
                    }
                        echo "</div>";
                      ?>
                    </div>
                      
                    
                    <?php the_excerpt()?></p>
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
