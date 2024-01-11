<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage IAP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->


<!-- <div class="article">
    <div class="article_image">
        <a href="#"><img src="" alt=""></a>
    </div>
    <div class="article_content">
        <div class="article_category">Categorie</div>
        <div class="article_title">
            <a href="#">Titlu</a>
        </div>
        <div class="article_excerpt">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sit.</p>
        </div>
    </div>
</div> -->