<div class="bottom-banner">
	<div class="banner-content container flex flex-a-center">
		<p class="email"><i class="fa fa-envelope-o"></i> Sign Up For Our Newsletter</p>
		<div >

			<!-- Newsletter Sign Up -->
			<?= Form::open('newsletter','post', []) ?>
          		<div class="newsletter">
          			<?= Form::email('email', '', ['placeholder' => 'Enter Email Address', 'required'=>'true']) ?>
          			<?= Form::submit('Sign Up', ['class' => 'button radius postfix']) ?>
          		</div>
          	<?= Form::close() ?>
      	</div>
	</div>
</div>
<footer>
	<div class="foot-content container flex flex-a-start flex-j-between">
		<div class="foot-text">
			<h4>NZ Hiking Group is New Zealand's largest hiking club.</h4>
			<p>We plan prepare and organise hiking trips into New Zealands backcountry. Whether you are novice or experienced, we can cater for you.</p>
			<br>
			
		</div>
		<div class="foot-details flex flex-j-between">
			<div class="foot-contact">
				<h4>Contact</h4>
				<p>caigertom@gmail.com</p>
				<p>021 2166566</p>
			</div>
			<div class="sitemap">
				<h4>Sitemap</h4>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="trips">Trips</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<a class="admin-login" href="/signin">admin login</a>
	</div>
</footer>

<!-- ====================================== -->
<!-- Angular Js Scripts-->
<!-- ====================================== -->
<script src="assets/bower_components/angular/angular.min.js"></script>
<script src="assets/bower_components/angular-resource/angular-resource.min.js"></script>
<script src="assets/bower_components/angular-route/angular-route.min.js"></script>
<script src="assets/bower_components/angular-animate/angular-animate.min.js"></script>
<script src="assets/js/angular-messages.min.js"></script>
<script src="app/app.js"></script>