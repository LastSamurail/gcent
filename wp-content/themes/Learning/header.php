<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php global $tg_options; ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

	<div class="page-wrapper">
	
		<header class="main-header header-style-two">
	        <div class="header-top">
	            <div class="auto-container">
	                <div class="clearfix">
	                    <div class="top-left pull-left clearfix">
	                        <ul class="info-list">
								<li><span>Tel: </span><a href="<?php the_field('telephone'); ?>"> +228 22 36 85 81 / 90 26 61 11</a></li>
								<li><span>Adresse:</span><a href="mailto:<?php the_field('mail'); ?>"> gcent100@yahoo.fr</a></li>
							</ul>
							
	                    </div>
						<div class="top-right pull-right clearfix">
							<!-- Login Nav 
							<ul class="login-nav">
								<li><a href="login.html">Log In</a></li>
								<li><a href="register.html">Register</a></li>
							</ul>
							-->
						</div>
						
	                </div>
	            </div>
	        </div>
	        <div class="header-upper">
	        	<div class="outer-container">
	            	<div class="clearfix">
	                	
	                	<div class="pull-left logo-box">
	                    	<div class="logo">
	                    		<a href="<?php echo home_url(); ?>">
	                    			<img src="images/logo-2.png" alt="" title="">
	                    		</a>
	                    	</div>
	                    </div>
						
	                   	<div class="nav-outer clearfix">
	                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<?php
							      $args = [
							          'menu' => 'primary',
							          'theme_location' => 'primary',
							          'depth' => 2,
							          'container_class' => 'navbar-collapse show collapse clearfix',
							          'container_id' => 'navbarSupportedContent',
							          'menu_class' => 'navigation clearfix',
							      ];
							      wp_nav_menu($args);
							    ?>		
								
							</nav>
							
						</div>
	                   
	                </div>
	            </div>
	        </div>

	        <div class="mobile-menu">
	            <div class="menu-backdrop"></div>
	            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
	            
	            <nav class="menu-box">
	                <div class="nav-logo">
	                	<a href="<?php echo home_url(); ?>">
		                	<img src="images/logo-13.png" alt="" title="">
		                </a>
		            </div>
	                <div class="menu-outer"></div>
	            </nav>
	        </div>
			
		</header>
