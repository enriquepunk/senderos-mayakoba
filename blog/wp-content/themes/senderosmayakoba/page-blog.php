<?php
/*
Template Name: Page-blog
*/


get_header();
?>

<div class = "container">
	<div class="row">
		<section class="col-md-10 col-md-offset-1">
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1 class = "title montserrat color3">Noticias</h1>
					<p class = "title-caption text-center mancha-texto color4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id neque at aliquid eaque odio libero enim, repudiandae nihil eum eligendi repellendus cumque expedita placeat et praesentium beatae illum nesciunt! Nesciunt.
					</p>
				</div>
			</div>   
		</section>
	</div>
</div>
<div class = "container-fluid thumnails-img">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "row">
					<div class = "col-md-6">
						<form class="form-inline row" role="form">
							<div class = "col-md-12">
			                  <div class = "row">
			                      <div class="form-group blog-filter col-xs-12 text-center">
			                          <label for="ejemplo_email_3" class="color1 montserrat px12 text-righ">Filtrar por fechas: </label>
			                          <input class = "newsletter-input open-sans px12" type="email" class="form-control" id="ejemplo_email_3"
			                                 placeholder="E-mail"/>
			                          <button class = "submit-newsletter color1 montserrat px12 background2" type="submit" class="btn btn-default">Enviar</button>
			                      </div>
			                  </div>
			                </div>
						</form>
					</div>
					<div class = "col-md-6">
						<form class="form-inline row" role="form">
							<div class = "col-md-12">
			                  <div class = "row">
			                      <div class="form-group blog-filter col-xs-12 text-center">
			                          <label for="ejemplo_email_3" class="color1 montserrat px12 text-righ">Suscríbete a nuestro Newsletter: </label>
			                          <input class = "newsletter-input open-sans px12" type="email" class="form-control" id="ejemplo_email_3"
			                                 placeholder="E-mail"/>
			                          <button class = "submit-newsletter color1 montserrat px12 background2" type="submit" class="btn btn-default">Enviar</button>
			                      </div>
			                  </div>
			                </div>
						</form>
					</div>	
				</div>
			</div>
		</div>
		<!-- BEGIN: Noticias -->
		<?php
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

			$args = array(
			    'post_type' => 'post',
			    'post_status' => 'publish',
			    'posts_per_page' => 10,
			    'paged' => $paged,
			);
			$i = 1;
			$the_query = new WP_Query($args);
			$flat_wp_first_post = 1;
			$paginator_page_number = $the_query->max_num_pages;
		?>
		<div class = "row">
			<section class = "col-md-12">
				<div class = "row content-post">
						<?php
							while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<div class ="col-sm-6 padding-medium">
							<div class ="row background7">
								<div class ="col-xs-5 col-sm-5 col-md-5 img-single-post-custom">
									<?php 
										if ( has_post_thumbnail() ) { 
											$image_id = get_post_thumbnail_id();
											$image_url = wp_get_attachment_image_src($image_id,'large', true);
											echo '<img class = "img-responsive" src="'. $image_url[0] .'" alt="">';
										} 
									?>
								</div>
								<div class = "col-xs-7 col-sm-7 col-md-7">
									<div class = "last-post">
										<h3 class = "title open-sans italic color3"><?php the_title(); ?></h3>
										<p class = "text-blog">
											<?php the_excerpt(); ?>
										</p>	
									</div>
								</div>
							</div>
						</div>
					<!--<div class = "col-md-6  padding-medium">
						<div class = "row">
							<div class = "col-sm-5 col-xs-5" style="padding-left:0">
								<?php 
									if ( has_post_thumbnail() ) { 
										$image_id = get_post_thumbnail_id();
										$image_url = wp_get_attachment_image_src($image_id,'large', true);
										echo '<img class = "img-responsive" src="'. $image_url[0] .'" alt="">';
									} 
								?>
							</div>
							<div class = "col-sm-7 col-xs-7 background7">
								<div class = "last-post">
									<h3 class = "title open-sans italic color3"><?php the_title(); ?></h3>
									<p class = "text-blog">
										<?php the_excerpt(); ?>
									</p>
									<a href = "{{post.guid}}" class = "read-more-btn montserrat px16 background1 color1">
										LEER MÁS
									</a>	
								</div>
							</div>	
						</div>
					</div>-->



					<?php
						// if multiple of 3 close div and open a new div
						if(( ( $i ) % 2 == 0) &&  $i != $the_query->post_count ) {
							echo '</div><div class = "row content-post">';
						}
            			$i++;
						endwhile;
					?>
				</div>
			</section>
		</div>
		<!-- END: Noticias-->
	</div>
</div>
<?php get_footer(); ?>