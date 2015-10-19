<? include 'header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Our Trips</h1>
	</div>
</div>


<div class="container" style="min-height: 600px;" ng-controller="tripController">
	<h3>Upcoming Trips</h3>
	<p>This is a full selection of our upcoming trips. Click on a trip to make a booking.</p>
	
	<!--==============================================-->
	<!-- Filter -->
	<!--==============================================-->
	<a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown tiny radius secondary">Display</a>
	<ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
	  <li><a href="#/">Grid</a></li>
	  <li><a id="map-button" href="#/map">Map</a></li>
	</ul>
	
	<!--==============================================-->
	<!-- Trip Items in Grid and Map-->
	<!--==============================================-->
	<span ng-view class="view-container" onload="assignDistance()"></span>
		
</div>

<? include 'footer.php' ?>

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="assets/bower_components/foundation/js/foundation.min.js"></script>
<script src="assets/js/foundation_init.js"></script>

<!-- ============================================= -->
<!-- Google Maps api script-->
<!-- ============================================= -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

</body>
</html>