<?php get_header(); ?>
      
<div id="content" class="narrow">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
        <div itemscope itemtype="http://data-vocabulary.org/Recipe" >
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-header">
                    <h1 itemprop="name"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p><?php _e('Par', 'jenny');?> <span itemprop="author"> <?php the_author_posts_link(); ?> </span> | <?php the_time('j F Y') ?></p>
                </div>
                
                <!--Show Ads Below Post Title -->
                <?php if (get_option('p2h_posttop_adcode') != '') { ?>
                <div class="topad">
                <?php echo(stripslashes (get_option('p2h_posttop_adcode')));?>
                </div>
                <?php } ?>
                
                <?php the_content( __('<p>Read more &raquo;</p>', 'jenny') ); ?>
                <?php wp_link_pages( __('before=<div class="post-page-links">Pages:&after=</div>', 'jenny')) ; ?>
                
                <!--Show Ads Below Post -->
                <?php if (get_option('p2h_postend_adcode') != '') { ?>
                <div class="bottomad">
                <?php echo(stripslashes (get_option('p2h_postend_adcode')));?>
                </div>
                <?php } ?>
                
                <div class="post-meta">
                    <ul>
                        <li><?php comments_popup_link( __('Laissez un commentaire', 'jenny'), __( '1 commentaire', 'jenny'), __('% commentaires', 'jenny')); ?> &bull; <?php the_category(' &bull; ');?></li>
                        <?php the_tags( __('<li>Tags: ', 'jenny'), ' &bull; ', '</li>'); ?>
                        <li><?php _e('Partager sur ', 'jenny'); ?><a href="http://twitter.com/home?status=Currently reading: <?php the_title_attribute(); ?> <?php the_permalink(); ?>"><?php _e('Twitter','jenny'); ?></a>, <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title_attribute(); ?>"><?php _e('Facebook', 'jenny'); ?></a></li>
                        <?php edit_post_link(__('Editer ce message','jenny'), '<li>', '</li>'); ?>
                    </ul>
                </div>
                
            <!--Next Previous Links-->
            <ul class="next-prev-links">
                    <li><?php previous_post_link('%link',  __('&laquo;Recette précédente','jenny') );?></li>
                    <li><?php next_post_link('%link', __('Recette suivante &raquo;','jenny') ); ?></li>
            </ul>	

                <!--RELATED POSTS-->
            <?php
                $original_post = $post;
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                  $first_tag = $tags[0]->term_id;
                  $args=array(
                    'tag__in' => array($first_tag),
                    'post__not_in' => array($post->ID),
                    'showposts'=>3,
                    'caller_get_posts'=>1
                   );
                  $my_query = new WP_Query($args);
                  if( $my_query->have_posts() ) {
                      echo "<div class=\"relatedposts\">";
                      _e('<h3 class="relatedtitle">Recettes similaires </h3>','jenny');
                      echo "<ul>";
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
              
               <li class="relatedthumb">
               <!-- IF HAS THUMBNAIl DEFINED-->
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                <!-- Post Thumbnail TimThumb-->
                <?php	if ( has_post_thumbnail() ) { ?>
                    <?php // Show the thumbnail
                    echo get_the_post_thumbnail( $post->ID, 'thumbnail');
                    ?>
                <?php }  else { ?> <!-- If post has no image, show default icon -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="<?php the_title(); ?>" />	
                <?php }	?> <!-- has thumbnail else close -->
                <!-- /Post Tumbnail -->
                </a>
                
                <span><a class="relatedtext" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                <?php the_title(); ?>
                </a></span>
                </li>
            <?php endwhile;
            echo "</ul>";
            echo "</div>";
            }
            }
        $post = $original_post;
        wp_reset_query();
        ?>

        <hr />
    <!--RELATED POSTS ENDS-->
            </div><!--#post-->
		</div><!--#itemscope-->

		<?php endwhile; ?>
		
	<?php else : ?>
		
			<h2 class="page-title">Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
				
			<script type="text/javascript">
				// focus on search field after it has loaded
				document.getElementById('s') && document.getElementById('s').focus();
			</script>			

	
	<?php endif; ?>

	<?php comments_template(); ?>
	
	</div><!--#content-->
	
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
