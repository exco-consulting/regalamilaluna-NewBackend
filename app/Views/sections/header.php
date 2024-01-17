<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8" />
	
	<title><?= $title ?></title>
	
	<meta name="description" content="<?= $description ?>">
	
	<meta name="keywords" content="<?= $keywords ?>">
	
	<meta name="author" content="regalamilaluna.it">
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="theme-color" content="#fff">
	<!--website-favicon-->
	<link href="<?=base_url('favicon.png')?>" rel="icon">
	<!--plugin-css-->
	<link href="<?=base_url('css/bootstrap.min.css')?>" rel="stylesheet">
	
	<link href="<?=base_url('css/plugin.min.css')?>" rel="stylesheet">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- template-style-->
	<link href="<?=base_url('css/style.css')?>" rel="stylesheet">
	
	<link href="<?=base_url('css/responsive.css')?>" rel="stylesheet">
	
	<link href="<?=base_url('css/darkmode.css')?>" rel="stylesheet">
	
	<link href="<?=base_url('css/gdpr-cookie.css')?>" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NF2LR6MDP2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
function gtag() {
	dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'G-NF2LR6MDP2');
	</script>

</head>
<body>
	<div id="progress-bar"></div>
	
	<header class="nav-bg-w main-header navfix fixed-top menu-white">
		<div class="container-fluid m-pad">
			<div class="menu-header">
				<div class="dsk-logo"><a class="navbar-brand nav-brand" href="<?=base_url()?>">
					<img src="<?=base_url('logo_regalami.png')?>" alt="Logo" class="mega-white-logo" />
					
					<img src="<?=base_url('logo_regalami.png')?>" alt="Logo" class="mega-darks-logo" />
					
										  </a></div>
				
				<div class="col-lg-6 col-md-7 col-sm-5 d-none d-sm-block">
					<form class="form-floating">
						<input type="search" class="form-control form-control-lg" id="floatingInputValue" placeholder="search">
						
						<label for="floatingInputValue">Cerca...</label>
					</form>
				</div>
				
				<div class="custom-nav" role="navigation">
					<ul class="nav-list">
						<li class="sbmenu"><a href="#" class="menu-links">Home</a>
							
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="col-md-12">
											<div class="sub-menu-center-block">
												<div class="sub-menu-column">
													<div class="menuheading">Multi-Page Demo</div>
													
													<ul>
														<li><a href="index.html">Homepage</a></li>
														<li><a href="digital-agency.html">Digital Agency</a></li>
														<li><a href="digital-agency-dark.html">Digital Agency Dark</a></li>
														<li><a href="web-design-agency.html">Web Design Agency</a></li>
														<li><a href="web-design-agency-dark.html">Web Design Agency Dark</a></li>
														<li><a href="digital-marketing.html">Digital Marketing</a></li>
														<li><a href="digital-marketing-dark.html">Digital Marketing Dark</a></li>
														<li><a href="lead-generation.html">Lead Generation Agency</a></li>
														<li><a href="lead-generation-dark.html">Lead Generation Agency Dark</a></li>
													</ul>
												</div>
												
												<div class="sub-menu-column">
													<div class="menuheading">&nbsp;</div>
													
													<ul>
														<li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
														<li><a href="freelance-portfolio-dark.html">Freelance Portfolio Dark</a></li>
														<li><a href="app-development.html">App Development Agency</a></li>
														<li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
														<li><a href="creative-agency.html">Creative Agency</a></li>
														<li><a href="branding-agency.html">Branding  Agency</a></li>
														<li><a href="modern-agency.html">Modern Agency</a></li>
														<li><a href="business-and-startup.html">Business & Startup</a></li>
														<li><a href="graphic-studio.html">Graphic Studio</a></li>
													</ul>
												</div>
												
												<div class="sub-menu-column">
													<div class="menuheading">One-Page Demo</div>
													
													<ul>
														<li><a href="digital-agency-onepage.html">Digital Agency</a></li>
														<li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
														<li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
														<li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
														<li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
														<li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
														<li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
														<li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
														<li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
													</ul>
												</div>
												
												<div class="sub-menu-column">
													<div class="menuheading">&nbsp;</div>
													
													<ul>
														<li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a></li>
														<li><a href="app-development-onepage.html">App Development Agency</a></li>
														<li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
														<li><a href="creative-agency-onepage.html">Creative Agency</a></li>
														<li><a href="branding-agency-onepage.html">Branding  Agency</a></li>
														<li><a href="modern-agency-onepage.html">Modern Agency</a></li>
														<li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
														<li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						  
						  <?php if($session->isLogged): ?> 
						  	<li>
							<div class="dropdown text-end"><a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
						          </a>
								
								<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
									<li><a class="dropdown-item" href="#">New project...</a></li>
									<li><a class="dropdown-item" href="#">Settings</a></li>
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Sign out</a></li>
								</ul>
							</div>
						</li>
					  	<?php else: ?>
					  	<li>
							<div class="text-end">
								<button type="button" class="mt10 btn-main btn-small bg-btn3 lnk" data-bs-toggle="modal" data-bs-target="#modalform">Login</button>
								<a href="#" class="btn-main bg-btn2 lnk" data-bs-toggle="modal" data-bs-target="#modalform-full">Sign Up<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
								
								<!--<button type="button" class="btn btn-warning" onclick="window.location.href='<?=base_url('party/registerForm')?>';">Sign-up</button>-->
							</div>
						</li>
					  
					  <?php endif; ?>
					  </ul>
				</div>
				
				<div class="mobile-menu2">
					<ul class="mob-nav2">
						<li class="navm-"><a class="toggle" href="#"><span></span></a></li>
					</ul>
				</div>
			</div>
			<!--Mobile Menu-->
			<nav id="main-nav">
				<ul class="first-nav">
					<li><a href="#">Home</a>
						
						<ul>
							<li><a href="#">Multi-Page Demo</a>
								
								<ul>
									<li><a href="index.html">Homepage</a></li>
									<li><a href="digital-agency.html">Digital Agency</a></li>
									<li><a href="digital-agency-dark.html">Digital Agency Dark</a></li>
									<li><a href="web-design-agency.html">Web Design Agency</a></li>
									<li><a href="web-design-agency-dark.html">Web Design Agency Dark</a></li>
									<li><a href="digital-marketing.html">Digital Marketing</a></li>
									<li><a href="digital-marketing-dark.html">Digital Marketing Dark</a></li>
									<li><a href="lead-generation.html">Lead Generation Agency</a></li>
									<li><a href="lead-generation-dark.html">Lead Generation Agency Dark</a></li>
									<li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
									<li><a href="freelance-portfolio-dark.html">Freelance Portfolio Dark</a></li>
									<li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
									<li><a href="creative-agency.html">Creative Agency</a></li>
									<li><a href="branding-agency.html">Branding  Agency</a></li>
									<li><a href="app-development.html">App Development Agency</a></li>
									<li><a href="modern-agency.html">Modern Agency</a></li>
									<li><a href="business-and-startup.html">Business & Startup</a></li>
									<li><a href="graphic-studio.html">Graphic Studio</a></li>
								</ul>
							</li>
							<li><a href="#">One-Page Demo</a>
								
								<ul>
									<li><a href="digital-agency-onepage.html">Digital Agency</a></li>
									<li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
									<li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
									<li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
									<li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
									<li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
									<li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
									<li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
									<li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
									<li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a></li>
									<li><a href="app-development-onepage.html">App Development Agency</a></li>
									<li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
									<li><a href="creative-agency-onepage.html">Creative Agency</a></li>
									<li><a href="branding-agency-onepage.html">Branding  Agency</a></li>
									<li><a href="modern-agency-onepage.html">Modern Agency</a></li>
									<li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
									<li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				
				<ul class="bottom-nav">
					<li class="prb"><a href="tel:+11111111111">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
							<path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
							  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
							  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
							  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
						</svg>
					</a></li>
					<li class="prb"><a href="mailto:somewebmedia@gmail.com">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
							
							<path d="M0 0h24v24H0z" fill="none" />
						</svg>
					</a></li>
					<li class="prb"><a href="skype:niwax.company?call">
						<svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
							<path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
						</svg>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	
	<!--start Modal html -->
	<div class="popup-modalfull">
		<?php helper('form'); ?>
		
		<div class="modal" id="modalform-full">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="closes abt" data-bs-dismiss="modal">&times;</button>
					
					<div class="modal-body">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-8 text-center">
									<h3 class="mb10">New Account</h3>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>
							
							<div class="row justify-content-center mt30">
								<div class="col-md-9">
									<div class="form-block fdgn2 mt10 mb10">
										
										<?php 
											$attributes = ['name' => 'registerForm', 'id' => 'registerForm'];
											echo form_open('party/register', $attributes);
										?>
											<div class="fieldsets row">
												<div class="col-md-6">
													<input type="text" placeholder="Name" name="name">
												</div>
												
												<div class="col-md-6">
													<input type="text" placeholder="Surname" name="surname">
												</div>
											</div>
											
											<div class="fieldsets row">
																								
												<div class="col-md-6">
													<input type="email" placeholder="Email Address" name="email">
												</div>
												
												<div class="col-md-6 form-group">
													<select  required="required" name="type">
														<option value="">Account Type*</option>
														<option value="Privato" selected="selected">Privato</option>
														<option value="Agenzia">Agenzia</option>
													</select>
												</div>
											</div>
											
											<div class="fieldsets row">
												<div class="col-md-6">
													<input type="text" name="psw" placeholder="Password" required="required">
												</div>
												
												<div class="col-md-6">
													<input type="text" name="checkpsw" placeholder="Ripeti Password" required="required">
												</div>
											</div>
																						
											<div class="fieldsets row mt30 pb20 justify-content-center">
												<div class="col-md-8">
													<button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
												</div>
											</div>
										<?php echo form_close() ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--end Modal html  -->
	
	<!--start Modal html -->
            <div class="popup-modals">
		<div class="modal" id="modalform" tabindex="-1" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="common-heading">
							<h4 class="mt0 mb0">Popup Modal Form</h4>
						</div>
						
						<button type="button" class="closes" data-bs-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body">
						<div class="form-block fdgn2 mt10 mb10">
							<form id="contact-form" method="post" action="#">
								<div class="fieldsets row">
									<div class="col-md-12 form-group floating-label">
										<input class="floating-input" id="email" type="text"  placeholder="Email" required="required">
<!--										<label for="email">Email address</label>-->
									</div>
									
									<div class="col-md-12 form-group">
										<input  type="password"   placeholder="Password" required="required">
									</div>
								</div>
								
								<div class="fieldsets row mt20">
									<div class="col-md-6 form-group v-center">
										<button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
									</div>
									
									<div class="col-md-6 form-group v-center text-right"><a href="#" class="psforgt">Forgot Password?</a></div>
								</div>
								
								<hr class="mt30 mb30">
								
								<div class="text-center">
									<p class="mb20">or Login with:</p>
									
									<div class="social-btnnxx"><a href="#" class="btn-main fb-btn"><i class="fab fa-facebook-f"></i> Facebook</a>                
						                <a href="#" class="btn-main google-btn"><i class="fab fa-google"></i> Google</a></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--end Modal html  -->

