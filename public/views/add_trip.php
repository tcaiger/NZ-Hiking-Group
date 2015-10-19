<? include 'admin_header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Admin Page</h1>
	</div>
</div>

<div class="container" ng-controller="adminController">

	<h3>Add Trip</h3>
	<form>
		<fieldset>
			<legend>Trip Details</legend>

			<label>Trip Name
				<input type="text" ng-model="newTrip.name" placeholder="eg. Milford Track...">
			</label>

			<label>Description
				<textarea rows="3" ng-model="newTrip.description" placeholder="eg. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus optio ..."></textarea>
			</label>


			<div class="flex flex-a-center flex-j-between">
				<label>Days
					<input type="number" ng-model="newTrip.days" placeholder="eg. 4">
				</label>
				<label>Date
					<input type="date" ng-model="newTrip.date" placeholder="Inputs and other form elements go inside...">
				</label>
			</div>

			<label>Trip Image
				<input type="file">
			</label>


			<label>Trip Location</label>
			<div id="map"></div>
			<br>
			<br>
			<button class="radius" ng-click="addTrip(newTrip)">Submit</button>

		</fieldset>
	</form>

</div>

<? include 'footer.php' ?>

<!-- ============================================= -->
<!-- Google Maps api script-->
<!-- ============================================= -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

</body>
</html>