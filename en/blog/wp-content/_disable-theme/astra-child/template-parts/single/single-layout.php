<?php

/**

 * Template for Single post

 *

 * @package     Astra

 * @author      Astra

 * @copyright   Copyright (c) 2020, Astra

 * @link        https://wpastra.com/

 * @since       Astra 1.0.0

 */



?>



<div <?php astra_blog_layout_class( 'single-layout-1' ); ?>>



	<?php astra_single_header_before(); ?>



	<header class="entry-header <?php astra_entry_header_class(); ?>">



		<?php astra_single_header_top(); ?>



		<?php astra_blog_post_thumbnail_and_title_order(); ?>



		<?php astra_single_header_bottom(); ?>



	</header><!-- .entry-header -->



	<?php astra_single_header_after(); ?>



	<div class="entry-content clear" 

	<?php

				echo astra_attr(

					'article-entry-content-single-layout',

					array(

						'class' => '',

					)

				);

				?>

	>



		<?php astra_entry_content_before(); ?>



		<?php the_content(); ?>


<!--ADD Original Text Before Correction and Voice Record-->
<!--VAR-->
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $voice_record = get_field('voice_record'); ?>
<?php $notes = get_field('notes'); ?>
<!--VAR END-->


<style type="text/css">
.pale-text-area{
    background: #eee;
    padding: 1rem;
    margin-bottom: 1.5rem;
    color: #999;
}	
.pale-text-area h4{
    color: #999;
    margin-bottom: 0;
    font-size: 1rem;
}
.pale-text-area .title{
	display: block;
	margin-top: 1rem;
}

/*toggle*/
#acMenu dt{
display:block;
cursor:pointer;
}
#acMenu dd{
background:#f2f2f2;
display:none;
margin: 0;
padding-bottom: 1.5rem;
}

</style>

<article id="acMenu" class="pale-text-area">
	<dl>
 <?php if(empty($title)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <dt><h4><i class="fa fa-caret-down" aria-hidden="true"></i> The original text before the correction</h4></dt>
			<dd><span class="title"><?php echo $title; ?></span>
				<?php echo $text; ?></dd>
        <?php endif;?><!--END Conditional branch VAR-->
     </dl>
</article>

<article class="download-area">
 <?php if(empty($voice_record)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <h4>You can listen to today's English conversation</h4>
					<audio src="<?php echo $voice_record; ?>" controls>
					<p>Your browser does not support the audio element.</p>
					</audio>
					 <p>Recorded on yesterday of <?php the_date(); ?></p> 
        <?php endif;?><!--END Conditional branch VAR-->
         <?php if(empty($notes)):?><!--Conditional branch VAR none-->
        <?php else:?><!--Conditional branch VAR-->
	        <h4>Notes in Japanese</h4>
            <p><?php echo $notes; ?></p>
        <?php endif;?><!--END Conditional branch VAR-->
</article>
<script>
$(function(){
$("#acMenu dt").on("click", function() {
$(this).next().slideToggle();
});
});
</script>
<?php
  echo do_shortcode('[starbox]');
?>

		<?php

			astra_edit_post_link(

				sprintf(

					/* translators: %s: Name of current post */

					esc_html__( 'Edit %s', 'astra' ),

					the_title( '<span class="screen-reader-text">"', '"</span>', false )

				),

				'<span class="edit-link">',

				'</span>'

			);

			?>

	<?php astra_entry_content_after(); ?>



		<?php

			wp_link_pages(

				array(

					'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),

					'after'       => '</div>',

					'link_before' => '<span class="page-link">',

					'link_after'  => '</span>',

				)

			);

			?>

	</div><!-- .entry-content .clear -->

</div>
