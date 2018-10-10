<?php
/**
 * Template Name: archives
 */

get_header(); ?>

<div class="main-inner">
    <div class="content-wrap">
        <div id="content" class="content">
            <section id="posts" class="posts-collapse">
	            <?php
	            // Start the loop.
	            while ( have_posts() ) : the_post();

		            bmqynext_archives_list();

		            // If comments are open or we have at least one comment, load up the comment template.
		            if ( comments_open() || get_comments_number() ) {
			            comments_template();
		            }

		            // End of the loop.
	            endwhile;
	            ?>
            </section>
        </div>
	    <?php get_sidebar( 'content-bottom' ); ?>
    </div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>


</div><!-- .content-area -->