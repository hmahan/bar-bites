<?php get_header(); ?>

<img id="mixology" src="http://staging.haileymahan.com/wp/wp-content/themes/HTML5-Reset-Blank/images/mixology.jpg" />

<div id="all">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			

			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
            
           

			<footer class="postmetadata">
            	<div id="meta"><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?></div>
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>

		</article>
        
        

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
    
    

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
