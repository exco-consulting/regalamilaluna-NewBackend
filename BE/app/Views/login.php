  <!--Start login Form-->
  <section class="login-page pad-tb">
	<div class="v-center m-auto">
	  <a href="<?= base_url('/')?>" class="d-block text-center mb30"><img src="images/white-logo.png" alt="Logo" class="mega-darks-logo"></a>
	  <div class="login-form-div">        
		<h4 class="mb40 text-center">Login to your Account</h4>
		<div class="form-block">
		  <form id="loginForm">
			<div class="fieldsets row">
			  <div class="col-md-12 form-group">
				<input type="email" id="email" name="email" placeholder="Email" required="required">
			  </div>
			  <div class="col-md-12 form-group"><input  type="password" id="password" name="password" placeholder="Password" required="required">
			  </div>
			</div>
			<div class="fieldsets row mt20">
			  <div class="mb20" id="message"></div>
			  <div class="col-md-6 form-group v-center">
				<button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
			  </div>
			  <div class="col-md-6 form-group v-center text-right"><a href="#" class="psforgt">Forgot Password?</a>     </div>
			</div>                       
		  </form>
		</div>
	  </div>      
	  </div>      
	</section>
	<!--End login Form-->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
	<script src="<?= base_url('js/jquery.min.js')?>"></script>
	<script src="<?= base_url('js/login.js')?>"></script>