<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tema Padrão IFMT 2022
 */

get_header();
?>

              <?php

                  if ( have_posts() ) :

                  while ( have_posts() ) : the_post(); 
              ?>

                          <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                  <?php the_content() ?>

              <?php endwhile;

                  else :

                  echo '<p>There are no posts!</p>';

                  endif;

              ?>
<?php
get_footer();
