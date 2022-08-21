<?php get_header(); ?>

	<?php if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); ?>
				<div class="mt-4">
                               <h1><?php the_title(); ?></h1>
                               
					           <?php the_content();?>  
				</div>     
				<?php endwhile; else : ?>
					    <div class="mt-4">Lo sentimos, elemento no encontrado</div>
				<?php endif; ?>

<?php get_footer(); ?>