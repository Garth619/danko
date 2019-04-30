<?php 

/* Template Name: Case Results */

get_header(); ?>


	<div id="internal_main">
	
		
	<div id="outer_trigger" class="outer_container content">
		
		<div class="d_m_slide dm_internal">
		
			<span>D</span>
			<span>M</span>
	
		</div><!-- d_m_slide -->
		
		<div class="case_results_top">
			
			<div class="case_results_left">
			
				<h1><?php the_title();?></h1>
				
				<?php // get_template_part( 'loop', 'page' ); ?>
			
				<h2>We succeed because we work hard to uncover the truth and the proof that will make that truth plain to a judge or jury.  We never give up.</h2>

				<p>We accept nothing at face value.  In every case, the defense has a story to tell.  The defense’s story involves blaming others, including the victim.  We didn’t manufacture the faulty part, they say.  Or, we didn’t promise to honor the contract.  Or, the victim did something wrong.</p>

				<p>We are known for taking cases to trial and winning.  That is important for the client who wants his day in court.  But it is also important for the client who wants to settle out of court.  Because of our record of success and our willingness to try cases, defendants are more likely to offer our client an out-of-court settlement that is fair.</p>

				<p>We think that our Representative Cases show that, no matter what the specific situation, we find out what really happened so that we can tell our client’s story accurately and effectively.</p>
			
			</div><!-- case_results_left -->
			
			<div class="case_results_right">
			
				<img class="case_result_img" src="<?php bloginfo('template_directory');?>/images/img-result.jpg"/>
			
			</div><!-- case_results_right -->
				
		</div><!-- case_results_top -->
		
		<div class="case_results_bottom">
			
			<div class="cr_filter_wrapper">
			
				<div class="cr_input">
					
					<span>Select A Practice Area</span>
					
					<div class="cr_input_square"></div><!-- cr_input_square -->
					
				</div><!-- cr_input -->
			
			</div><!-- cr_filter_wrapper -->
		
		</div><!-- case_results_bottom -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->
					
			  


<?php get_footer(); ?>
