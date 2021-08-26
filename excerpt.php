<?php /**
 * Template Name: Home Page with excerpts 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
*/ 

get_header(); ?>

<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div>

<main>
  <?php 
    // the query
    $the_query = new WP_Query( array(
      'category_name' => 'condolences',
        'posts_per_page' => 3,
    )); 
  ?>

  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    
      <blockquote>
        <?php the_content(); ?>
      </blockquote>
      <cite>
        <?php get_the_author_meta( 'display_name', $author_id );  ?>
      </cite>

      <div style="height:38px" aria-hidden="true" class="wp-block-spacer"></div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>

  <?php the_content(); ?>

</main>












<?php get_footer(); ?>


