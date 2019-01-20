

 <?php get_header(); ?>
 <div id="main">
 	<div id="separate-bar"></div>
 	<div id="content">
 		<h1 class="h1-postagens">POSTAGENS:</h1>
 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 			
 			<div id="post-header">
 			<h1 class="h1-postagens"> <?php the_title(); ?> </h1> 			
 			</div>

 			<h4 class="h4-postagens">Postado em: <?php the_time(); ?> </h4>
 			<div id="post-content">
 				<p> <?php the_content(); ?> </p>
 				<p id="tags"> <?php the_tags(); ?> </p>
			</div>
			<br>
			<?php endwhile; else: ?>	
			<p>Desculpe, nenhum post encontrado.</p><?php endif; ?>
 	</div>
 	
 	<?php get_sidebar(); ?>

 	</div>
 	<div id="delimeter">
 		
 	</div>

 	<?php get_footer(); ?>
