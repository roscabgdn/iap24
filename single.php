<?php
get_header();
?>
    <main id="primary" class="site-main container">
        <div class="article_title">
            <?php the_title(); ?>
        </div>
        <div class="article_image">
            <?php the_post_thumbnail('blog-detail-size'); ?>
        </div>
        <div class="article_content">
            <?php the_content(); ?>
        </div>
    </main>  
<?php
get_footer();
