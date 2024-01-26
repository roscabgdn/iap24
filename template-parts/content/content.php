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
<?php /*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
*/ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
    <div class="article_image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('blog-article-size'); ?>
        </a>
    </div>
    <div class="article_content">
        <div class="article_category">
            <?php 
                $categories_list = get_the_category_list( wp_get_list_item_separator() );
				if ( $categories_list ) {
					printf(
						/* translators: %s: List of categories. */
						'<span class="cat-links">' . esc_html__( '%s', 'iap24' ) . ' </span>',
						$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
					);
				}                
            ?>
        </div>
        <div class="article_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="article_excerpt">
           <?php the_excerpt(); ?>
        </div>
    </div>
</article>