<?php
/**
 * @package WordPress
 * @subpackage floral
 */
/*
Template Name: IndexSucre
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

		<!-- Content -->
		<div id="content">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<!-- Post -->
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="post-entry">
					<?php the_content('Read <span>more...</span>'); ?>
				<h3> Boissons </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(42),
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
						<p><?php _e('Désolé, l\'index des boissons est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Biscuits </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(202),
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
						<p><?php _e('Désolé, l\'index des biscuits est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Crêpes et compagnie </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(208),
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
						<p><?php _e('Désolé, l\'index des crêpes est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Crumbles </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(201),
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
						<p><?php _e('Désolé, l\'index des crumbles est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Entremets </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(203),
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
						<p><?php _e('Désolé, l\'index des entremets est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Gâteaux </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(204),
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
						<p><?php _e('Désolé, l\'index des gâteaux est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Glaces </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(206),
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
						<p><?php _e('Désolé, l\'index des glaces est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Pure gourmandise ! </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(209),
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
						<p><?php _e('Désolé, l\'index des glaces est vide'); ?></p>
					  <?php endif;

					  //Reset Query
					  wp_reset_query();?>

				  </ul>
				  <h3> Tartes </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(200),
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
				  <h3> Tout fruit </h3>
				  <ul>
					  <?php
					  //The Query
					  $query_args = array(
									'category__in' => array(205),
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
						<p><?php _e('Désolé, l\'index des fruits est vide'); ?></p>
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
		<!-- /Content -->

<?php get_footer(); ?>
