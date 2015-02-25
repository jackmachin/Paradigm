<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">

						<div id="main" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                <?php get_template_part ('partials/article-header' , 'index'); ?>

								<div class="entry-content cf">
									<?php the_content(); ?>
								</div>

                <?php get_template_part ( 'partials/article-footer' , 'index' ) ; ?>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

                <?php get_template_part ('partials/no-post-found');?>

							<?php endif; ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
