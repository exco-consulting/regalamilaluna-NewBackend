

<!--Start Footer-->
<footer class="dark-footer dg-bg--1 pt60 upset dark-footer-1">
	
	<div class="up-curvs">
		<svg height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 1920 89.3" style="enable-background:new 0 0 1920 89.3;" xml:space="preserve" fill="#111111">
			<path d="M1919.5,89.5H-0.5c0,0,0-90,0-90c114.9,4.8,228.6,17.9,343.6,24.6c118.6,7,237.4,11.9,356.1,14.7
			c237.6,5.7,475.3,3.1,712.7-7.7c164.2-7.5,328.1-23.7,492.3-31c0.7,0,15.2-0.5,15.2-0.6C1919.5-0.5,1919.5,89.5,1919.5,89.5z" />
		</svg>
	</div>
	
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-4 col-sm-6  ftr-brand-pp"><a class="navbar-brand mb30 mt30" href="#">
				<img src="<?=base_url('images/white-logo.png')?>" alt="Logo" width="100" /></a>
				
				<p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
				
				<div class="ff-social-icons mt30"><a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
					<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
					<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
					<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a></div>
			</div>
			
			<div class="col-lg-3 col-sm-6">
				<h5 class="mb30 mt30">Contact Us</h5>
				
				<ul class="footer-address-list ftr-details">
					<li><span><i class="fas fa-envelope"></i></span>
						
						<p>Email <span> <a href="mailto:info@businessname.com">info@businessname.com</a></span></p>
					</li>
					<li><span><i class="fas fa-phone-alt"></i></span>
						
						<p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
					</li>
					<li><span><i class="fas fa-map-marker-alt"></i></span>
						
						<p>Address <span> 123 Business Centre London SW1A 1AA</span></p>
					</li>
				</ul>
			</div>
			
			<div class="col-lg-2 col-sm-6">
				<h5 class="mb30 mt30">Company</h5>
				
				<ul class="footer-address-list link-hover">
					<li><a href="get-quote.html">Contact</a></li>
					<li><a href="javascript:void(0)">Customer's FAQ</a></li>
					<li><a href="javascript:void(0)">Refund Policy</a></li>
					<li><a href="javascript:void(0)">Privacy Policy</a></li>
					<li><a href="javascript:void(0)">Terms and Conditions</a></li>
					<li><a href="javascript:void(0)">License & Copyright</a></li>
				</ul>
			</div>
			
			<div class="col-lg-3 col-sm-6 footer-blog-">
				<h5 class="mb30 mt30">Instagram</h5>
				
				<div class="instagram-post">
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-1.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
					
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-2.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
					
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-3.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
					
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-4.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
					
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-5.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
					
					<div class="thumb hover-scale"><a href="#">
						<img src="<?=base_url('images/portfolio/image-6.jpg')?>" alt="instagram images" class="w-100">
						</a></div>
				</div>
			</div>
		</div>
		
		<div class="row end-footer-">
			<div class="col-lg-6">
				<div class="footer-copyrights-">
					<p>Copyright &copy; 2020-2021 Niwax. All rights reserved. Template By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Rajesh Doot</a></p>
				</div>
			</div>
			
			<div class="col-lg-6">
				<ul class="footer-link-- link-hover">
					<li><a href="#">Privace &amp; Policy.</a></li>
					<li><a href="faq.html">Faq.</a></li>
					<li><a href="#">Terms.</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!--End Footer-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?=base_url('js/vendor/modernizr-3.5.0.min.js')?>"></script>
<script src="<?=base_url('js/jquery.min.js')?>"></script>
<script src="<?=base_url('js/bootstrap.bundle.min.js')?>"></script> 
<script src="<?=base_url('js/plugin.min.js')?>"></script>
<script src="<?=base_url('js/gdprcookies.js')?>"></script>

<!--<script src="<?=base_url('js/preloader.js')?>"></script>-->
<!--common script file-->
<script src="<?=base_url('js/main.js')?>"></script>
<script src="<?=base_url('js/progress-bar.js')?>"></script>

<script>
	//bootstrap 5 tooltip
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})
</script>

<script>
	gdprCookieNotice({
	  locale: 'it', //This is the default value
	  timeout: 500, //Time until the cookie bar appears
	  expiration: 30, //This is the default value, in days
	  domain: '.regalamilaluna.it', //If you run the same cookie notice on all subdomains, define the main domain starting with a .
	  implicit: true, //Accept cookies on page scroll automatically
	  statement: 'https://google.com', //Link to your cookie statement page
	  performance: ['JSESSIONID'], //Cookies in the performance category.
	  analytics: ['ga'], //Cookies in the analytics category.
	  marketing: ['SSID'] //Cookies in the marketing category.
	});
</script>


</body>
</html>
