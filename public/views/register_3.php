
<form name="form3" class="reg">
<fieldset>
	<legend>Ride Share</legend>
	<div class="row">
		<div class="radios medium-12 columns">
		    <input type="radio" ng-click="driving()" id="drive">
		    <label for="drive">I can drive</label>
		    <input type="radio" ng-click="lift()" id="lift">
		    <label for="lift">I need a lift</label>
	    </div>
	</div>
	<div class="row" ng-if="newReg.driving">
		<div class="medium-6 columns">
			<label>Departure Time</label>
			<input type="text" name="time" placeholder="9:00am" 
				ng-model="newReg.dtime"  
				required>
		</div>
		<div class="medium-6 columns">
			<label>Spare Seats</label>
			<input type="number" name="seats" placeholder="4" 
				ng-model="newReg.seats"   
				required>
		</div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<label>Street Address</label>
			<input type="text" name="street" placeholder="10 Reynolds Place" 
				ng-model="newReg.street" 
				ng-minlength="3"
				ng-maxlength="15"  
				required>
			<div ng-messages="form3.street.$error" ng-show="form3.street.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="medium-6 columns">
			<label>Suburb</label>
			<input type="text" name="suburb" placeholder="Grey Lynn" 
				ng-model="newReg.suburb" 
				ng-minlength="3"
				ng-maxlength="15"  
				required>
			<div ng-messages="form3.suburb.$error" ng-show="form3.suburb.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
		<div class="medium-6 columns">
			<label>City</label>
			<input type="text" name="city" placeholder="Auckland" 
				ng-model="newReg.city" 
				ng-minlength="3"
				ng-maxlength="15"  
				required>
			<div ng-messages="form3.city.$error" ng-show="form3.city.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="small-9 columns">
			<a href= "#step2" class="button tiny success">Back</a>
			<a href="#step4" class="button tiny success">Next</a>
		</div>
	</div>
</fieldset>
</form>

