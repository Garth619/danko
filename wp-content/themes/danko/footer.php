<footer id="footer_trigger" style="background:url(<?php bloginfo('template_directory');?>/images/pattern.jpg);background-size:78px 39px;">
	
	
	<div class="footer_form_wrapper">
	
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
					
					<img src="<?php bloginfo('template_directory');?>/images/logo-footer.svg"/>
					
				</a>
				
			</div><!-- footer_col_one -->
			
			<div class="footer_col_two footer_col">
				
				<span class="address">333 Twin Dolphin Dr #145 Redwood Shores, CA 94065</span><!-- address -->

				<a class="footer_tel" href="tel:6504533600">(650) 453-3600</a><!-- footer_tel -->
				
				<a class="footer_get_directions" href="" target="_blank" rel="noopener">Get Directions</a><!-- footer_get_directions -->
				
			</div><!-- footer_col_two -->
			
			<div class="footer_col_three footer_col">
				
				<div class="footer_col_three_inner">
				
					<ul>
						<li><a class="" href="">Aviation Blog</a></li>
						<li><a class="" href="">Personal Injury Blog</a></li>
						<li><a class="" href="">Privacy Policy</a></li>
						<li><a class="" href="">Disclaimer</a></li>
					</ul>
				
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


</body>
</html>
