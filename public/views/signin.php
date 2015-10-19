<div class="top-banner">
	<div class="container">
		<h1>Admin Page</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<?= Form::open('','post', ['style' => 'width: 300px']) ?>
			<div class="form-group">
				<h3>Sign In</h3>
			</div>

			<div class="form-group">
				<?= Form::label('email', 'Email') ?>
				<?= Form::email('email', '', ['placeholder' => 'eg. admin@gmail.com', 'required'=>'true']) ?>
			</div>

			<div class="form-group">
				<?= Form::label('password', 'Password') ?>
				<?= Form::password('password', '', ['placeholder' => 'eg. admin1234', 'required'=>'true', 'minlength'=>'2', 'maxlength'=>'10']) ?>
			</div>

			<div class="form-group">
				<?= Form::submit('Sign In', ['class' => 'button radius']) ?>
			</div>

		<?= Form::close() ?>

	</div>
</div>

<!-- Validate JS scripts -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/js/validate_init.js"></script>

</body>
</html>