<!-- If we are on the homepage... -->
<?php if ($_SERVER[REQUEST_URI] == '/'): ?>

<!-- Limit ng-repeat to the 3 soonest trips -->
<div class="flex flex-j-start flex-wrap">
	<div class="content-holder flex flex-column flex-a-start" ng-repeat="trip in trips |limitTo: 3 | orderBy:'date'">

<!-- Otherwise -->
<?php else: ?>

<!-- Include the drop down button to order trips and... -->
<a data-dropdown="drop2" aria-controls="drop2" aria-expanded="false" class="button dropdown tiny radius secondary">Order</a>
<ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
  <li><a ng-click="order('date')">Soonest</a></li>
  <li><a ng-click="order('-date')">Latest</a></li>
  <li><a ng-click="order('-days')">Longest</a></li>
  <li><a ng-click="order('days')">Shortest</a></li>
  <li><a ng-click="order('distance')">Closest</a></li>
</ul>

<!-- ng-repeat showing all the trips ordered as per the drop down button -->
<div class="view-content flex flex-j-start flex-wrap">
	<div class="content-holder flex flex-column flex-a-start" ng-repeat="trip in trips | orderBy:predicate">

<?php endif; ?>
		
		<!-- ===================== -->
		<!-- Item Content -->
		<!-- ===================== -->
		<a href="register#/step1?{{ trip.id }}">
			<div class="screen">
				<h4><i class="fa fa-pencil-square-o"></i> Register</h4>
			</div>
		</a>
		<div class="image" style="background: url('assets/img/{{ trip.image }}'); background-size: cover; background-position: center;"></div>
		<h4>{{ trip.name }}</h4>
		<p class="trip-details">{{ trip.days }} days - {{ trip.date | myDateFormat}}</p>
		<p>{{ trip.description }}</p>

	</div>
</div>