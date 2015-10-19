<form name="form1" class="reg" novalidate>
<fieldset>
	<legend>Personal Details</legend>

	<div class="row">
		<div class="medium-6 columns">
			<label>First Name</label>
			<input type="text" name="fname" placeholder="John" 
				ng-model="newReg.fname"
				ng-minlength="3"
				ng-maxlength="15"  
				required>
			<div ng-messages="form1.fname.$error" ng-show="form1.fname.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
		<div class="medium-6 columns">
			<label>Second Name</label>
			<input type="text" name="lname" placeholder="Smith" 
				ng-model="newReg.lname"
				ng-minlength="3"
				ng-maxlength="15"  
				required>
			<div ng-messages="form1.lname.$error" ng-show="form1.lname.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-6 columns">
			<label>Phone Number</label>
			<input type="text" name="number" placeholder="021 21 123456" 
				ng-model="newReg.phone"  
				required>
			<div ng-messages="form1.number.$error" ng-show="form1.number.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
		<div class="small-6 columns end">
			<label>Age</label>
			<input type="number" ng-model="newReg.age" placeholder="25">
		</div>
	</div>

	<div class="row">
		<div class="medium-9 columns">
			<label>Email</label>
			<input type="email" name="email" placeholder="johnsmith@gmail.com"
				ng-model="newReg.email"
				ng-minlength="3"
				ng-maxlength="20"  
				required>
			<div ng-messages="form1.email.$error" ng-show="form1.email.$touched">
				<div ng-messages-include="views/messages.html" ></div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="medium-9 columns">
			<a href="#step1" class="button tiny success disabled">Back</a>
			<a ng-click="test()" href="#step2" class="button tiny success">Next</a>
		</div>
	</div>
</fieldset>
</form>



