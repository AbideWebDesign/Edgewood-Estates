<?php /* Template Name: Forms Page */ ?>
<?php get_header(); ?>
<div class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
				<?php if(have_rows('form_sections')): ?>
					<?php while(have_rows('form_sections')): the_row(); ?>
						<h2 class="mb-2"><?php the_sub_field('section_title'); ?></h2>
						<div class="mb-4"><?php the_sub_field('section_text'); ?></div>
						<?php if(have_rows('section_documents')): ?>
							<div class="table-responsive mb-4">
								<table class="table table-striped table-bordered">
									<?php while(have_rows('section_documents')): the_row(); ?>
										<tr><td><strong><?php the_sub_field('name'); ?></strong></td><td><a href="<?php the_sub_field('file'); ?>" target="_blank">Download File</a></td></tr>
									<?php endwhile; ?>
								</table>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>