<?php
/**
 * @package WordPress
 * @subpackage floral
 */
/*
Template Name: IndexSale
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

		<!-- Content -->
		<div id="content">
            <div id="page">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<!-- Post -->
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-entry">
					<?php the_content('Read <span>more...</span>'); ?>
				  <h2> Entrées </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(49),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des entrées est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Galettes végétales </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(51),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des galettes végétales est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Légumes </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(8),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des légumes est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Pains </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(81),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des pains est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Poissons et fruits de mer </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(86),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des poissons est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Pour ouvrir l'appétit... </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(71),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des amuses bouches est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Soupes </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(37),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des tartes est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Terrines, tartes et autres cakes salés </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(46),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des terrines est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
                  <br>
				  <h2> Viandes </h2>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(15),
									'orderby'        => 'title',
									'posts_per_page' => -1,
									'order'          => 'ASC'
									);

					  //query_posts('category_name=petites-douceurs&orderby=title&posts_per_page=-1&order=ASC');
					  query_posts($query_args);
					  //The Loop
					  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					  <!-- Display the Title as a link to the Post's permalink. -->
					  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

					  <?php endwhile; else:?>
						<p><?php _e('Désolé, l\'index des viandes est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</div>
			<!-- /Post -->
			<?php endwhile; ?>
			<?php else : ?>
			<!-- Post -->
			<div class="post">
				<div class="post-title">
					<h2>Not Found</h2>
				</div>
				<div class="post-entry">
					<p>Sorry, but you are looking for something that isn't here.</p>
				</div>
			</div>
			<!-- /Post -->
			<?php endif; ?>

			<div class="clear"></div>

            </div>
		<!-- /Page -->
		</div>
		<!-- /Content -->

<?php get_footer(); ?>
