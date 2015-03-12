<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class = "single-post-noticia">
	<div class = "container">
		<div class="row">
			<section class="col-md-10 col-md-offset-1">
				<div class = "row">
					<div class = "col-xs-12 text-center">
						<h1 class = "title montserrat color3"><?php  the_title(); ?></h1>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12 text-center img-single-content">
						<?php 
							if ( has_post_thumbnail() ) { 
								$image_id = get_post_thumbnail_id();
								$image_url = wp_get_attachment_image_src($image_id,'large', true);
								echo '<img class = "img-responsive" src="'. $image_url[0] .'" alt="'. $image_url[1] .'">';
							} 
						?>
					</div>
				</div>
				<div class = "row single-content-text">
					<div class = "col-md-12 text-blog">
						<?php
							the_content();
						?>
					</div>
				</div>
				<div class = "row share-content social-media-content text-center">
					<div class = "col-xs-12 col-md-8 col-md-offset-2">
						<div class = "row">
							<div class = "col-sm-4 col-md-4 text-center">
								<span class = "facebook-button"><img src="./web/image/General/boton-facebook.jpg" class = "img-responsive" alt="Facebook"></span>
							</div>
							<div class = "col-sm-4 col-md-4 text-center">
								<span class = "twitter-buttom"><img src="./web/image/General/boton-twitter.jpg"  class = "img-responsive" alt="Twitter"></span>
							</div>
							<div class = "col-sm-4 col-md-4 text-center">
								<span class = "mail-share"><img src="./web/image/General/boton-correo.jpg" class = "img-responsive" alt="mail"></span>
							</div>	
						</div>
					</div>
				</div>   
			</section>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>