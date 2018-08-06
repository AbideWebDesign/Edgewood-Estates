<?php /* Template Name: Bylaws Page */ ?>
<?php get_header(); ?>
<div class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="mb-2"><?php the_title(); ?></h1>
				<div class="mb-4"><?php the_field('bylaws_text'); ?></div>
				<?php if(have_rows('documents')): ?>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<?php while(have_rows('documents')): the_row(); ?>
								<tr>
									<td><strong><?php the_sub_field('document_name'); ?></strong></td>
									<td>
										<?php if(have_rows('document_files')): ?>
											<ul class="list-inline mb-0">
												<?php while(have_rows('document_files')): the_row(); ?>
													<li class="list-inline-item">
														<a href="<?php the_sub_field('file'); ?>" target="_blank"><?php the_sub_field('file_label'); ?></a>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</td>
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