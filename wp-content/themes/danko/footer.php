<footer id="footer_trigger" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size:78px 39px;">
	
	
	<div id="free_consultation" class="footer_form_wrapper">
	
		<div class="footer_form_inner">
		
			<span class="footer_title">Free Consultation</span><!-- footer_title -->
		
			<span class="required"><span>*</span>-Required</span><!-- required -->
		
			<?php gravity_form(4, false, false, false, '', true, 12333); ?>
		
	</div><!-- footer_form_inner -->
	
	</div><!-- footer_form_wrapper -->
	
	<div class="footer_location_wrapper">
		
		<div class="footer_location_inner">
			
			<div class="footer_col_one footer_col">
				
				<a class="" href="<?php bloginfo('url');?>">
					
					<?php $firm_footer_logo = get_field( 'firm_footer_logo','option'); ?>

					<img src="<?php echo $firm_footer_logo['url']; ?>" alt="<?php echo $firm_footer_logo['alt']; ?>" />

				</a>
				
			</div><!-- footer_col_one -->
			
			<div class="footer_col_two footer_col">
				
				<span class="address"><?php the_field( 'firm_street_address','option'); ?></span><!-- address -->

				<a class="footer_tel" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone' ); ?></a><!-- footer_tel -->
				
				<a class="footer_get_directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- footer_get_directions -->
				
			</div><!-- footer_col_two -->
			
			<div class="footer_col_three footer_col">
				
				<div class="footer_col_three_inner">
					
					<?php if(get_field('footer_links','option')): ?>
						
						<ul>
					 
						<?php while(has_sub_field('footer_links','option')): ?>
					 
							<?php if(get_sub_field('internal_or_outside_link') == 'Outside Link') : ?>
							
								<li><a class="" href="<?php the_sub_field( 'outside_link' ); ?>" target="_blank" rel="noopener"><?php the_sub_field( 'outside_link_title' ); ?></a></li>
								
								<?php else:
							
									$post_object = get_sub_field( 'internal_link' );
								
									$post = $post_object;
								
									setup_postdata( $post ); ?>
								
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								
										<?php wp_reset_postdata();

							endif;
							   
						endwhile; ?>
						
						</ul>
					 
					<?php endif; ?>
				
					<div class="copyright_wrapper">
					
						<span class="copyright">&copy;<?php echo date("Y"); ?> danko meredith. All rights reserved</span>
					
						<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
						
							<img src="<?php bloginfo('template_directory');?>/images/ilawyer.svg"/>
						
						</a>
					
					</div><!-- copyright_wrapper -->
				
				</div><!-- footer_col_three_inner -->
				
			</div><!-- footer_col_three -->
			
		</div><!-- footer_location_inner -->
		
	</div><!-- footer_location_wrapper -->
	
</footer>


<?php wp_footer();?>


<?php if(get_field('related_articles_sidebar') == 'Aviationlawmonitor.com Articles') { ?>

	
	<script type="text/javascript">

		jQuery(document).ready(function($){

			const vm = new Vue({
				el: '#app',
				data () {
					return {
						posts: []
    			}
  			},
				mounted() {
					axios.get("https://www.aviationlawmonitor.com/wp-json/wp/v2/posts?per_page="+my_data.aviationcount+"").then(response => {this.posts = response.data})
				}
			});
		
		});

	</script>


<?php } ?>


</body>
</html>
