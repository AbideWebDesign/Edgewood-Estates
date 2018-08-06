<?php /* Template Name: Board Page */ ?>
<?php get_header(); ?>
<div class="my-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="mb-2"><?php the_title(); ?></h1>
				<div class="mb-4"><?php the_field('board_text'); ?></div>
				<h2 class="mb-4">Board Members</h2>
				<?php if(have_rows('board_members')): ?>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<?php while(have_rows('board_members')): the_row(); ?>
								<tr>
									<td><strong><?php the_sub_field('role'); ?></strong></td>
									<td><?php the_sub_field('name'); ?></td>
									<td><a href="mailto:<?php the_sub_field('email'); ?>" target="_blank"><?php the_sub_field('email'); ?></a></td>
								</tr>
							<?php endwhile; ?>
						</table>
					</div>
				<?php endif; ?>
				<h2 class="mb-4">Other Contacts</h2>
				<?php if(have_rows('other_contacts')): ?>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<?php while(have_rows('other_contacts')): the_row(); ?>
								<tr>
									<td><strong><?php the_sub_field('role'); ?></strong></td>
									<td><?php the_sub_field('name'); ?></td>
									<td><a href="mailto:<?php the_sub_field('email'); ?>" target="_blank"><?php the_sub_field('email'); ?></a></td>
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