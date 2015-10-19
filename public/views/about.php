<? include 'header.php' ?>

<div class="top-banner">
	<div class="container">
		<h1>About Us</h1>
	</div>
</div>

<div class="container" ng-controller="boardController">

	<h3>NZ Hiking Group</h3>
	<div class="flex flex-j-start flex-wrap">
		<div class="text-block">
			<p>In 1968, the East Coast Bays Lions Club gazed around the North Shore and decided the teenagers needed to be introduced to a sport or hobby which would be inexpensive and give them plenty to do instead of always hanging around those street corners.</p>
		</div>
		<div class="text-block">
			<p>After much thinking they came up with the idea of a Tramping Club as being ideal for their problem, so they inserted a series of advertisements in the North Shore Advertiser asking for all who were interested in forming a hiking and tramping club to come along.</p>
		</div>
		<div class="home-image" style="background-image: url('assets/img/about.jpeg');"></div>
	</div>
	<br>
	<hr>
	<h3>Board Of Trustees</h3>
	<p>The club is administered by the following three volunteers.</p>
	<div class="flex flex-j-start flex-wrap">

		<div class="content-holder flex flex-column flex-a-start" ng-repeat="member in members">
			<div class="image" style="background: url('assets/img/avatar.jpg'); background-size: cover; margin-left: -3em;"></div>
			<h4>{{ member.name }}</h4>
			<p>"I really enjoyed it, especially the stream-bashing - running through rivers, scrabbling over rocks - just going hard."</p>
		</div>

	</div>
</div>

<? include 'footer.php' ?>

</body>
</html>