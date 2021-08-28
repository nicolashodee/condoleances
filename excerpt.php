

<?php /**
 * Template Name: Home Page with excerpts 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
*/ 

get_header(); ?>



<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<div style="font-size: 1rem; margin: 0 15%;"><?php the_content(); ?></div>
<main>
<!-- BUTTON BACK TO TOP -->
<button onclick="topFunction()" id="myBtn" title="Go to top">&#9650;</button> 
  
  <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
  <?php 
    // the query
    $the_query = new WP_Query( array(
      'category_name' => 'condolences'
    )); 
  ?>



  <!-- LOOPING FOR EACH PUBLISHED POST -->
  <?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="tenant">
        <!-- THE EXCERPT -->
        <blockquote class='excerpt anim'>
            <span style="color: #7a341d; font-size: 1.5rem; font-weight: bold;"><?php the_title(); ?></span>
            <p>
              <?php $my_post_meta = get_post_meta($post->ID, 'fpsm_author_name', true); ?>
              <small><i>par <?php echo ($my_post_meta); ?></i></small>
            </p>
            <?php the_excerpt(); ?>
            <a href="" class="read">...lire plus</a><br>
            
            <br>
            
        </blockquote>
  
        <!-- THE WHOLE POST -->
        <blockquote class='content'>

          <span style="color: #7a341d; font-size: 1.5rem; font-weight: bold;"><?php the_title(); ?></span>
          <p>
              <?php $my_post_meta = get_post_meta($post->ID, 'fpsm_author_name', true); ?>
              <small><i>par <?php echo ($my_post_meta); ?></i></small>
            </p>
          <?php the_content(); ?>
          <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( 'full' );
            }
          ?>
          <a href="" class="read-less">...lire moins</a>
        </blockquote>
      </div>

      <!-- SHOW THE AUTHOR NAME -->
      <p>
        <?php echo get_post_meta('fpsm_author_name'); ?>
      </p>

      <div style="height:38px" aria-hidden="true" class="wp-block-spacer"></div>
      
    <?php endwhile; ?>
    
   

    

  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>

  


</main>












<?php get_footer(); ?>


