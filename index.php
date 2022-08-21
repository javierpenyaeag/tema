<?php get_header(); ?>

	<?php if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>
				<div class="mt-4">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                               
                <?php the_excerpt(); ?> 
				</div>     
				<?php endwhile; else : ?>
					    <div class="mt-4">Lo sentimos, elemento no encontrado</div>
				<?php endif; ?>

<?php get_footer(); ?>