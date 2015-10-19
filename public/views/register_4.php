
<form class="reg">
<fieldset>
	<legend>Registration Summary</legend>

	<div class="row">
		<div class="small-12 columns">
			<p><strong>Personal Details</strong></p>
			<p ng-if="!newReg.fname">Please complete form</p>
			<p>{{ newReg.fname }} {{ newReg.lname }}</p>
			<p>{{ newReg.phone }}</p>
			<p>{{ newReg.email }}</p>
			<p>{{ newReg.street }} {{ newReg.suburb }} {{ newReg.city }}</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="small-12 columns">
			<p><strong>Emergency Contact</strong></p>
			<p ng-if="!newReg.emFname">Please complete form</p>
			<p>{{ newReg.emFname }} {{ newReg.emLname }}</p>
			<p>{{ newReg.emPhone }}</p>
			<p>{{ newReg.emCity }}</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="small-12 columns">
			<p><strong>Ride Share</strong></p>
			<p ng-if="!newReg.street">Please complete form</p>
			<p ng-if="newReg.driving">Driving</p>
			<p ng-if="!newReg.driving && newReg.street">Not Driving</p>
			<p ng-if="newReg.dtime">Departing at {{ newReg.dtime }}</p>
			<p ng-if="newReg.street">From {{ newReg.street }} {{ newReg.suburb }} {{ newReg.city }}</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="small-9 columns">
			<a href= "#step3" class="button tiny success">Back</a>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="small-12 columns">
			<label><strong>Complete Registration</strong></label>
		      <input id="checkbox1" type="checkbox"><label for="checkbox1">Details Are Correct</label><br>
		      <input id="checkbox2" type="checkbox"><label for="checkbox2">I Accept Terms & Conditions</label>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="small-4 columns">
			<button ng-click="saveReg()">Submit</button>
		</div>
		<div class="small-7 columns end" ng-if="success==true">
			<div data-alert class="alert-box success radius">Form Submitted<a href="#step4" class="close">&times;</a></div>
		</div>
		<div class="small-7 columns end" ng-if="success==false">
			<div data-alert class="alert-box alert radius">Errors In Form<a href="#step4" class="close">&times;</a></div>
		</div>
	</div>
</fieldset>
</form>


