<? include 'header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Contact Us</h1>
	</div>
</div>

<div class="container">
	<h2>Get In Touch</h2>
	<p style="width:500px">Like to know more?  You can contact the club using the following form.</p>
	<div class="flex flex-j-between flex-wrap">

		<?= Form::open('contactForm','post',['class'=>'contact-form']) ?>
			<h3>Contact Form</h3>
			<div class="row">
				<div class="medium-5 columns">
					<?= Form::label('name', 'Name') ?>
					<?= Form::text('fname', '', ['placeholder' => 'First Name', 'required'=>'true']) ?>
				</div>
				<div class="medium-5 columns end">
					<?= Form::label('lName', 'Last Name') ?>
					<?= Form::text('lName', '', ['placeholder' => 'Last Name', 'required'=>'true']) ?>
				</div>
			</div>
			<div class="row">
				<div class="medium-10 columns">
					<?= Form::label('email', 'Email') ?>
					<?= Form::email('email', '', ['placeholder' => 'Email Address', 'required'=>'true']) ?>
				</div>
			</div>
			<div class="row">
				<div class="medium-10 columns">
					<?= Form::label('message', 'Message') ?>
					<?= Form::textarea('message', '', ['placeholder' => 'Enter your message here', 'required'=>'true', 'rows'=>'6']) ?>
				</div>
			</div>
			<div class="row">
				<div class="small-6 columns">
					<?= Form::submit('Submit', ['class' => 'button radius']) ?>
				</div>
			</div>

		<?= Form::close() ?>

		

		<div class="contacts" style="width: 380px">

			<h3>Contact Details</h3>
			<div class="flex flex-j-between">
				<div>
					<p><strong>EMAIL</strong></p>
					<p>admin@gmail.com</p>
				</div>

				<div>
					<p><strong>TELEPHONE</strong></p>
					<p>021 123456</p>
				</div>
			</div>
			<br>
				<p><strong>ADDRESS</strong></p>
				<p>10 Short Street, Great Suburb<br>Big City 1011</p>
				<br>
				<p><strong>SOCIAL MEDIA</strong></p>
				<i class="fa fa-facebook-square fa-2x"></i>
				<i class="fa fa-twitter-square fa-2x"></i>
				<br>
				<br>
				
			</div>

		</div>

	</div>

</div>

<? include 'footer.php' ?>

</body>
</html>