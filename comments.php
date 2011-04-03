<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','jenny'));

	if ( post_password_required() ) { ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
<div id="comments" class="post-comments">
	<h2><?php comments_number( __('Pas de commentaires', 'jenny'), __( '1 commentaire', 'jenny'), __('% commentaires', 'jenny') );?></h2>
	
	<?php wp_list_comments('callback=p2h_comment&style=div'); ?>
	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	<hr />
	<div class="comment-navigation">
		<ul>
			<li><?php previous_comments_link( __('&laquo; Commentaires plus anciens','jenny') ); ?></li>
			<li><?php next_comments_link( __('Commentaires plus récents &raquo;', 'jenny') ) ?></li>
		</ul>
	</div>
	<?php endif; // check for comment navigation ?>
</div><!--#comments-->
 	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( ! comments_open() && !is_page() ) : ?>
	 	<!-- If comments are closed. -->
		<p><?php _e( 'Les commentaires sont fermés.', 'jenny' ); ?></p>
	<?php endif; ?>
	
<?php endif; ?>


<?php comment_form(
array(
	'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . __( 'Commentaire', 'jenny' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
	'comment_notes_before' => '<p class="comment-notes">' . __( 'Votre email ne sera pas publié.' ) . ( $req ? __( ' Les champs obligatoires sont marqués d\'une <span class="required">*</span>', 'jenny' ) : '' ) . '</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'title_reply'          => __( 'Laissez un commentaire', 'jenny' ),
	'cancel_reply_link'    => __( '(Cancel Reply)', 'jenny' ),
	'label_submit'         => __( 'Envoyer', 'jenny'),
)
); ?>


<hr />
