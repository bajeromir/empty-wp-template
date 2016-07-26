<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<article>
	<header>
		<h2><?php the_title() ?></h2>
	</header>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>

