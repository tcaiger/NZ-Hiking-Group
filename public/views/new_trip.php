<? include 'admin_header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Admin Page</h1>
	</div>
</div>

<div class="container" ng-controller="adminController">

	<h3>New Trip</h3>
	<form style="width: 400px">
		<fieldset>
			<legend>Trip Details</legend>

			<label>Trip Name
				<input type="text" ng-model="newTrip.name" placeholder="eg. Milford Track...">
			</label>

			<label>Description
				<textarea rows="2" ng-model="newTrip.description" placeholder="eg. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus optio ..."></textarea>
			</label>
			
			<div class="flex flex-a-center flex-j-between">
				<label>Days
					<input type="number" ng-model="newTrip.days" placeholder="eg. 4">
				</label>
				<label>Date
					<input type="date" ng-model="newTrip.date" placeholder="Inputs and other form elements go inside...">
				</label>
			</div>

			<div class="flex flex-a-center flex-j-between">
				<label>Latitude
					<input type="number" step="0.0001" ng-model="newTrip.latitude" placeholder="eg. 174.7400">
				</label>
				<label>Longitude
					<input type="number" step="0.0001" ng-model="newTrip.longitude" placeholder="eg. -36.8406">
				</label>
			</div>
			<br>
			<button ng-click="addTrip(newTrip)">Submit</button>

		</fieldset>
	</form>
</div>

<? include 'footer.php' ?>

</body>
</html>