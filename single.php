<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			


			</div>
			
		</article>
      <div id="meta">
<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
</div>
<div id="comments">
	<?php comments_template(); ?>
    </div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>