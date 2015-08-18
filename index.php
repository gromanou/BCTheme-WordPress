<?php
/**
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @subpackage BarbaricCode
 * @since BarbaricCode 1.0
 */

get_header();?>


<div class="container">
	<div id="main-content">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div <?php post_class() ?> >
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php if (has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>

				<?php the_content(''); ?>

			</div>
		<?php endwhile; ?>

		<div class="pagination">
			<ul>
				<li class="older"><?php next_posts_link('Older') ?></li>
				<li class="newer"><?php previous_posts_link('Newer') ?></li>
			</ul>
		</div>

	<?php else :?>

		<h2>Nothing was found</h2>
	<?php endif; ?>

	</div>			
</div>


<?php get_footer(); ?>

