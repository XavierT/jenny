<?php
/**
 * @package WordPress
 * @subpackage floral
 */
/*
Template Name: Liens
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

									  <ul>
					  <?php $bookmarks_args = array(
						  'orderby'          => 'name',
						  'order'            => 'ASC',
						  'limit'            => -1,
						 // 'category'         => ,
						 // 'exclude_category' => ,
						 // 'category_name'    => ,
						  'hide_invisible'   => 1,
						  'show_updated'     => 0,
						  'echo'             => 1,
						  'categorize'       => 1,
						  'title_li'         => __('Bookmarks'),
						  'title_before'     => '<h2>',
						  'title_after'      => '</h2>',
						  'category_orderby' => 'name',
						  'category_order'   => 'ASC',
						  'class'            => 'linkcat',
						  'category_before'  => '<li id=\"%id\" class=\"%class\">',
						  'category_after'   => '</li>' ); ?>

						  <?php wp_list_bookmarks( $bookmarks_args ); ?>
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