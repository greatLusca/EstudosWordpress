<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Tema Básico</title>
	<meta charset=<?php bloginfo('charset')?>>
	<?php wp_head(); ?>
</head>	
<body>
	<div id="wrapper"></div>
		<div id="header">
			<div id="header-bg">
				<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/header-bg.jpg" alt="">
			</div>	
				<div id="title-section">
				<a href= <?php home_url(); ?> ><h1 id="nome-blog"> <?php bloginfo( 'name' ); ?> </h1></a>							
				<h2 id="desc-blog"> <?php bloginfo( 'description' ); ?> </h2>
				</div>				
			
		</div>
