angular.module("App", ['ngResource', 'ngRoute', 'ngAnimate', 'ngMessages'])


// ======================================
// HOME CONTROLLER: Gets trip details
// from database
// ======================================
.controller('homeController',function($scope, $resource, $window) {

	var Trip   = $resource('/api/trips/:id');
	$scope.trips  = Trip.query();
})



// ======================================
// TRIP CONTROLLER: Gets trip details 
// from database & controls geolocation
// ======================================
.controller('tripController',function($scope, $resource, $animate) {

	var Trip   = $resource('/api/trips/:id');
	$scope.trips  = Trip.query(function(){
		getLocation($scope.trips);
	});

	// Edit Trip
	$scope.editTrip = function (update) {

		var trip = new Trip();
		trip.id = update.id;
		trip.name = update.name;
		trip.description = update.description;
		trip.days = update.days;
		trip.date = update.date;
		trip.$save({id: update.id});
	};

	// Delete Trip
	$scope.deleteTrip = function (trash) {
		console.log(trash);
		var response = confirm('Are you sure you want to delete this trip?');

		if (response === true) {

			var trip = new Trip();
			trip.id = trash.id;
			trip.deleted = '1';
			trip.$remove({id: trash.id});

			// remove the trip from the view
			var i = $scope.trips.indexOf(trash);
			$scope.trips.splice(i,1);
		}
	};
	
	// Order the trips by predicate
	$scope.predicate = 'name';
	$scope.order = function(predicate){

		$scope.predicate = predicate;
	};


	// Get user location
	function getLocation(trips){

		if(navigator.geolocation){
			console.log('geolocation is supported');
		} else {
			console.log('geolocation is not supported');
		}

		var userLocation;

		function success(position){
			userLocation = position;
			assignDistance(userLocation, trips);
		}
		function error(msg){
			console.log('error with geolocation');
		}
		navigator.geolocation.getCurrentPosition(success, error);
	};

	function assignDistance(userLocation, trips){
		
		for (var i = 0; i < trips.length; i++) {

			var d = calcDistance(userLocation, trips[i]);
			trips[i].distance = d;
		};
	};

	function calcDistance(userLocation, trip){
		var a = userLocation.coords.latitude - trip.latitude;
		var b = userLocation.coords.longitude - trip.longitude;
		var c = Math.sqrt((a*a) + (b*b)); 
		return c;
	};
})




// ======================================
// BOARD CONTROLLER: Gets board member details
// from database
// ======================================
.controller('boardController',function($scope, $resource, $window) {

	var Board   = $resource('/api/board/:id');
	$scope.members  = Board.query();
})



// ======================================
// MAP CONTROLLER: Google Map which shows trips
// ======================================
.controller('mapController',function($scope, $resource, $window, $animate) {

	// Get the trips from the database and put the
	// latitudes and longitudes into an array
	// called locations
	var locations = [];

	var Trip   = $resource('/api/trips/:id');
	$scope.trips  = Trip.query(function(){

		for (var i = 0; i < $scope.trips.length; i++) {

			var newLocation = {
				lat: parseFloat($scope.trips[i].latitude),
			 	lng: parseFloat($scope.trips[i].longitude),
			 	name: $scope.trips[i].name,
			 	id: $scope.trips[i].id
			};
			locations.push(newLocation);
		};
		// Call the drop function
		drop();
	});

	var markers = [];
	var map;

	// Map is initialised directly rom the map view
	$scope.initialize = function() {

		map = new google.maps.Map(document.getElementById('publicMap'), {
			zoom: 5,
			center: {lat: -41.0, lng: 172.0 }
		});
	};

	// Puts the pins on the map one at a time
	function drop() {
		clearMarkers();
		for (var i = 0; i < locations.length; i++) {

			// Put the marker down
	    	addMarkerWithTimeout(locations[i], i * 200);
	  	}
	};

	function addMarkerWithTimeout(position, timeout) {
		window.setTimeout(function() {

			// Add the marker
			var marker = new google.maps.Marker({
	      		position: position,
	      		map: map,
	      		animation: google.maps.Animation.DROP
	    	});

	    	markers.push(marker);

	    	// Add info window
	    	var infowindow = new google.maps.InfoWindow({
			    content: position.name+'<br><a href="register#/step1?'+position.id+'">Register now</a>',
			    maxWidth: 200
			  });

	    	// Add event listener to open window on click
	    	marker.addListener('click', function() {
    			infowindow.open(map, marker);
  			});

	  	}, timeout);
	};

	function clearMarkers() {
	  	for (var i = 0; i < markers.length; i++) {
	    	markers[i].setMap(null);
	  	}
	  	markers = [];
	};
})


// ======================================
// REGISTER CONTROLLER:
// ======================================
.controller('regController',function($scope, $resource, $location, $http) {

	// Set up variables and angular resources
	// to hold new participant and new booking data
	$scope.newReg = {};
	var Registration   = $resource('/api/registrations/:id');
	$scope.registrations  = Registration.query();

	var Trip   = $resource('/api/trips/:id');
	var trip_id = $location.url().slice(-1);
	$scope.trip = Trip.get({id: trip_id});


	// Save the registration data to the database
	$scope.saveReg = function () {

		var reg	 			= new Registration();

		reg.trip_name 		= $scope.trip.name;
		reg.trip_description = $scope.trip.description;
		reg.createdAt 	 	= new Date();

		reg.fname 			= $scope.newReg.fname;
		reg.lname 			= $scope.newReg.lname;
		reg.email 	 		= $scope.newReg.email;
		reg.phone 			= $scope.newReg.phone;
		reg.age 	 		= $scope.newReg.age;
		reg.em_fname 		= $scope.newReg.emFname;
		reg.em_lname 		= $scope.newReg.emLname;
		reg.em_relation 	= $scope.newReg.emRel;
		reg.em_city 		= $scope.newReg.emCity;
		reg.em_phone 		= $scope.newReg.emPhone;
		reg.driving 		= $scope.newReg.driving;
		reg.time 			= $scope.newReg.dtime;
		reg.seats 	 		= $scope.newReg.seats;
		reg.street 			= $scope.newReg.street;
		reg.suburb 			= $scope.newReg.suburb;
		reg.city 			= $scope.newReg.city;

		reg.$save(function(){
			console.log('reg in database', reg);
			$scope.success = true;

			$http.post('/registration', reg)
			.success(function(response){
				console.log('email sent', response);
			})
		});
	};

	$scope.driving= function(){
		$scope.newReg.driving = true;
		document.getElementById('drive').checked = true;
	}

	$scope.lift= function(){
		$scope.newReg.driving = false;
		document.getElementById('lift').checked = true;
	}

	$scope.getClass = function(path){
		if($location.path().substring(1) == path){
			return 'current';
		}else{
			return ';'
		}
	}
})



// ======================================
// ADMIN CONTROLLER: For admin pages
// ======================================
.controller('adminController',function($scope, $resource, $window) {

	var Trip   = $resource('/api/trips/:id');
	$scope.trips  = Trip.query();


	// Declare latitude & longitude variables
	var location={
		latitude:0,
		longitude:0
	};

	// File upload


	// Create a new trip in the database
	$scope.addTrip = function (newTrip) {

		var trip	 		= new Trip();

		trip.name 	 		= newTrip.name;
		trip.description 	= newTrip.description;
		trip.days 	 		= newTrip.days;
		trip.date 	 		= newTrip.date;
		trip.latitude 	 	= location.latitude;
		trip.longitude 	 	= location.longitude;
		
		trip.$save(function(){
			console.log('success', trip);
			$window.location.href = '/admin';
		}); 
	};

	


	// Google maps for getting lat and lng
	function initMap() {

		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 5,
			center: {lat: -41.0, lng: 172.0 }
		});

		map.addListener('click', function(e) {
    		placeMarkerAndPanTo(e.latLng, map);
    		location.latitude = e.latLng.H;
    		location.longitude = e.latLng.L;
  		});
	};

	function placeMarkerAndPanTo(latLng, map) {
	 	var marker = new google.maps.Marker({
			position: latLng,
	    	map: map
	  	});
	};

	// Initialise google maps on page load
	google.maps.event.addDomListener(window, 'load', initMap);
})


// ======================================
// Routing For Map Display
// ======================================
.config(function($routeProvider){

	$routeProvider

	.when('/', {
		templateUrl : 'views/trip_item.php',
		controller 	: 'tripController'
	})

	.when('/map', {
		templateUrl : 'views/map.php',
		controller 	: 'mapController'
	})

	.when('/step1', {
		templateUrl : 'views/register_1.php'
	})
	.when('/step2', {
		templateUrl : 'views/register_2.php'
	})
	.when('/step3', {
		templateUrl : 'views/register_3.php'
	})
	.when('/step4', {
		templateUrl : 'views/register_4.php'
	})
})




// ======================================
// DATE FILTER
// ======================================
.filter('myDateFormat', function myDateFormat($filter){
	return function(text){
		var  tempdate = new Date(text.replace(/-/g,"/"));
		return $filter('date')(tempdate, "d MMMM yy");
	};
});


