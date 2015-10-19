<? include 'admin_header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>Admin Page</h1>
	</div>
</div>

<div class="container" ng-controller="tripController" ng-init="edit=false" ng-cloak>

	<h3>Trips Summary</h3>

	<table>
		<thead>
			<tr>
	    		<th width="200">Trip Name</th>
	    		<th>Description</th>
	    		<th width="130">Date</th>
	    		<th width="50">Days</th>
	    		<th width="20">Edit</th>
	    		<th width="20">Delete</th>
	    	</tr>
	  	</thead>
	  	<tbody>
		    <tr  ng-repeat="trip in trips">
			    <td ng-hide="edit">
			    	{{ trip.name }}
			    </td>
			    <td ng-show="edit">
			    	<input type="text" ng-model="trip.name" value="{{ trip.name }}">
			    </td>
			    <td ng-hide="edit">
			    	{{ trip.description }}
			    </td>
			    <td ng-show="edit">
			    	<textarea rows="3" ng-model="trip.description">{{ trip.description }}</textarea>
			    </td>
			    <td ng-hide="edit">
			    	{{ trip.date | myDateFormat }}
			    </td>
			    <td ng-show="edit">
			    	<input type="text" ng-model="trip.date" value="{{ trip.date }}">
			    </td>
			    <td ng-hide="edit">
			    	{{ trip.days }}
			    </td>
			    <td ng-show="edit">
			    	<input type="text" ng-model="trip.days" value="{{ trip.days }}">
			    </td>
			    <td class="edit" ng-hide="edit" ng-click="edit = true">
			    	<i class="fa fa-pencil"></i>
			    </td>
			    <td class="edit" ng-show="edit" ng-click="editTrip(trip); edit = false">
			    	<i class="fa fa-pencil"></i>
			    </td>
			    <td class="edit" ng-click="deleteTrip(trip)">
			    	<i class="fa fa-times"></i>
			    </td>
		    </tr>
		</tbody>
	</table>
</div>

<? include 'footer.php' ?>

</body>
</html>