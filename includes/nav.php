


<header id="header" class="header  sticky-top bg-white">
		<nav class="navbar navbar-expand-xl navbar-light bg-white">
		  
		  	
		  		<div class="container">
		  			
		  					  			<a class="navbar-brand mr-auto" href="<?php echo home_url('/'); ?>">
		  					  				<img src="<?php echo get_template_directory_uri(); ?>assets/images/logo.svg" alt="">
		  					  				<h1 class="d-none">Geeksmo</h1>
		  					  			</a>
		  					  			
		  					  			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  					  				
		  					  			 <i class="fa fa-navicon"></i>
		  					  			</button>
		  					  							
		  					  			
		  								<div class="collapse navbar-collapse  ml-auto text-right" id="navbarNavDropdown">
		  							  		<?php wp_nav_menu( array( 
		  									'theme_location' => 'header-menu', 
		  									'container' => 'span', 
		  									'menu_class'=>'navbar-nav text-uppercase', 
		  									'menu_id'=> 'nav',
		  									// 'before'=>'<i class="fa ico-nav"></i>', 
		  									'after'=> '<span class="span-line"></span>' ) ); ?>
		  								</div>
		  		</div>
		  		


		  		
		  	
		  
		</nav>
		
	</header><!-- /header -->


	

	



