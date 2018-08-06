<?php get_header(); ?>
	<div class="my-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php while(have_posts()): the_post(); ?>
						<h1 class="mb-2"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>