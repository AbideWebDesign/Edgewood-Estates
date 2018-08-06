<?php /* Template Name: Home Page */ ?>
<?php 
	
	$today = date('Ymd');
	
	$args = array(
		'post_type' => 'news', 
		'post_per_page' => -1,
		'meta_query' => array(
	        array(
	            'key' => 'end_date',
	            'value' => $today,
	            'compare' => '>=',
	            'type' => 'DATE'
	        ),
	    ),
	);

	$query = new WP_Query($args); 

?>
<?php get_header(); ?>
<div class="mt-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="mb-2"><?php the_field('welcome_title'); ?></h1>
				<div class="mb-4"><?php the_field('welcome_text'); ?></div>
				<h2 class="mb-4"><?php the_field('news_title'); ?></h2>
				<?php if ($query->have_posts()): ?>
					<?php while ($query->have_posts()): $query->the_post(); ?>
						<div class="mb-4">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else: ?>
					<strong>No current updates at this time. Please check back soon!</strong>
				<?php endif; ?>
				<h2 class="mb-2"><?php the_field('events_title'); ?></h2>
				<div class="mb-4"><?php the_field('events_text'); ?></div>
				<?php if(have_rows('events')): ?>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<?php while(have_rows('events')): the_row(); ?>
								<tr>
									<td><?php the_sub_field('month_label'); ?></td>
									<td><?php the_sub_field('description'); ?></td>
								</tr>
							<?php endwhile; ?>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>