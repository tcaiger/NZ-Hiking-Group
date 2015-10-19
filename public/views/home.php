<? include 'header.php' ?>

<!--==================-->
<!-- Slick Slider -->
<!--==================-->
<div class="homepage-banner">
	<div style="background-image: url('assets/img/slide3.jpg')">
		<div class="container">
			<h1>NZ HIKING GROUP</h1>
			<h3 class="sub-heading">Explore The Outdoors</h3>
		</div>
	</div>
	<div style="background-image: url('assets/img/slide6.jpg')">
		<div class="container">
			<h1>NZ HIKING GROUP</h1>
			<h3 class="sub-heading">Meet New People</h3>
		</div>
	</div>
</div>

<div class="container" ng-controller="homeController">	
	<h3>NZ Hiking Group</h3>
	<div class="flex flex-j-start flex-wrap">
		<div class="text-block">
			<p>Hello and welcome to NZ Hiking Group. We are a community of around 80 men and women of diverse backgrounds and ages who enjoy the natural environment of the great outdoors as a club. We orgainise trips all over New Zealand so check out our trips page and get involved.</p>
		</div>
		<div class="text-block">
			<p>Take a look at our upcoming tramps and give the tramp leader a ring to find out more details, or alternatively, come along to a club meeting and learn more about us.  Our Tramping Club is affiliated to Federated Mountain Clubs.</p>
		</div>
		<div class="home-image" ></div>
	</div>
	<br>
	<hr>
	
	<h3>Latest Trips</h3>
	<p>This is a summary of our upcoming trips. To see all of our trips check out our trips page.</p>

	<!--==============================================-->
	<!-- Trip Items -->
	<!--==============================================-->
	<? include 'trip_item.php' ?>
	<a href="trips">See all trips &raquo;</a>
</div>

<? include 'footer.php' ?>

<!-- Slick Slider Scripts  -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="assets/js/slick_init.js"></script>

</body>
</html>