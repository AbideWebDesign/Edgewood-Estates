<?php /* Template Name: Maps Page */ ?>
<?php get_header(); ?>
<div class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class=><?php the_title(); ?></h1>
				<div class="mb-4"><?php the_field('map_text'); ?></div>
				<?php if(have_rows('maps')): ?>
					<div class="table-responsive mb-4">
						<table class="table table-striped table-bordered">
							<?php while(have_rows('maps')): the_row(); ?>
								<?php $image = get_sub_field('map_image'); ?>
								<tr><td><strong><a href="<?php the_permalink($image['id']); ?>" target="_blank"><?php echo wp_get_attachment_image($image['id'], 'col-4', false, array('class' => 'img-fluid')); ?></a></strong></td><td><?php the_sub_field('map_description'); ?></td></tr>
							<?php endwhile; ?>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>