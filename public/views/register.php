<? include 'header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Trip Registration</h1>
	</div>
</div>

<div class="reg-container container" ng-controller="regController"  ng-cloak>

	<div class="reg">
		<fieldset>
			<legend>Trip Name</legend>
			<div class="row">
				<div class="small-12 columns">
					<h3>{{ trip.name }}</h3>
				</div>
			</div>
		</fieldset>
	</div>

	<!-- Forms are inserted here -->
	<div ng-view></div>

	<!-- Progress Bar -->
	<div class="reg">
		<fieldset>
			<legend>Progress</legend>
			<div class="row">
				<div class="small-12 columns">
				 	<ul class="pagination">
				    	<li ng-class="getClass('step1')">
				    		<a href="#step1">Personal<br>Details</a>
				    		<a href="#step1">1</a>
				    	</li>
				    	<li ng-class="getClass('step2')">
				    		<a href="#step2">Emergency<br>Contact</a>
				    		<a href="#step2">2</a>
				    	</li>
				    	<li ng-class="getClass('step3')">
				    		<a href="#step3">Ride<br>Share</a>
				    		<a href="#step3">3</a>
				    	</li>
				    	<li ng-class="getClass('step4')">
				    		<a href="#step4">Complete<br>Registration</a>
				    		<a href="#step4">4</a>
				    	</li>
				  	</ul>
				</div>
			</div>
		</fieldset>
	</div>
	<a href="trips">&laquo; Back to trips</a>
	
</div>

<? include 'footer.php' ?>

</body>
</html>