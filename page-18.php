<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>
<style>.page-title{display:none;}</style>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
<div class="row">
	<div class="col-md-12 text-center">
    <p>&nbsp;</p>
    </div>
</div>
<div class="row">
	<div class="col-md-6 text-center chocho">
    
    <p class="section-heading" style="color:#FFFFFF;">Call to speak with an addiction expert.</p>
                <a href="tel:+18665749975" class="btn btn-primary btn-xl" >(866) 574-9975</a>
                
                <p style="font-size:14px;color:#FFFFFF;">&#128274; 100% Confidential</p>
    
    </div>
    
    <div class="visible-xs visible-sm"><hr width="75%" /></div>
    
    <div class="col-md-6 text-center">
    
    <p class="section-heading" style="color:#FFFFFF;">View options for drug and alcohol rehab.</p>
                <a href="http://recovery.blvdcenters.com/adwords-general-use-9-things-about-blvd/" class="btn btn-primary btn-xl" >Visit BLVD</a>
    
    </div>	
</div>
<div class="row">
	<div class="col-md-12 text-center">
    <p>&nbsp;</p>
    </div>
</div>
<div class="row">
	<div class="col-md-12 text-center">
    <a href="/">BACK</a>
    </div>
</div>
    <style>
	@media only screen and (min-width : 480px) {
		.chocho{border-right:none;}

}

/* Small Devices, Tablets */
@media only screen and (min-width : 768px) {
.chocho{border-right:none;}
}

/* Medium Devices, Desktops */
@media only screen and (min-width : 992px) {
.chocho{border-right:1px solid rgba(255,255,255,0.60);}
}

/* Large Devices, Wide Screens */
@media only screen and (min-width : 1200px) {
.chocho{border-right:1px solid rgba(255,255,255,0.60);}
}
	</style>
<?php get_footer(); ?>
