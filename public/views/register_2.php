<form name="form2" class="reg" novalidate>
<fieldset>
	<legend>Emergency Contact</legend>

	<div class="row">
		<div class="medium-6 columns">
			<label class="">First Name</label>
				<input type="text" name="emFname" placeholder="Sally" 
					ng-model="newReg.emFname"
					ng-minlength="3"
					ng-maxlength="15"  
					required>
			<div ng-messages="form2.emFname.$error" ng-show="form2.emFname.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
		<div class="medium-6 columns">
			<label>Second Name</label>
				<input type="text" name="emLname" placeholder="Smith" 
					ng-model="newReg.emLname" 
					ng-minlength="3"
					ng-maxlength="20"  
					required>
			<div ng-messages="form2.emLname.$error" ng-show="form2.emLname.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-6 columns">
			<label>Relationship</label>
				<input type="text" name="emRel" placeholder="Partner" 
					ng-model="newReg.emRel">
		</div>
		<div class="medium-6 columns">
			<label>Phone Number</label>
				<input type="text" name="emPhone" placeholder="021 123456" 
					ng-model="newReg.emPhone" 
					ng-minlength="3"
					ng-maxlength="15"  
					required>
			<div ng-messages="form2.emPhone.$error" ng-show="form2.emPhone.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-6 columns">
			<label>City</label>
				<input type="text" name="emCity" placeholder="Auckland" 
					ng-model="newReg.emCity">
		</div>
	</div>
	<br>

	<div class="row">
		<div class="small-9 columns">
			<a href= "#step1" class="button tiny success">Back</a>
			<a href="#step3" class="button tiny success">Next</a>
		</div>
	</div>

</fieldset>
</form>

	



