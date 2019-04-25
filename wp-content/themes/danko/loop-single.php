<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
		
		<div class="blog_meta">
		
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			Posted In
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<div class="blog_content">
			
			<?php the_content();?>
			
			<?php edit_post_link( __( 'Edit'), '', '' ); ?>
		
		</div><!-- blog_content -->

	<?php edit_post_link( __( 'Edit'), '', '' ); ?>

<?php endwhile; // end of loop ?>

<?php endif; ?>