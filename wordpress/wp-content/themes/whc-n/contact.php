<?php
/**
 * The template for displaying all single posts 
 * 
 * Template Name: Contact
 *
 * 
 */

get_header();
?>
    <div class="col-md-12 text-uppercase text-center">
          <hr>
        <h5>Please Feel free to follow us to stay up to date with the most recent news!</h5> <hr>    

    <?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

    </div>


<?php
get_footer();