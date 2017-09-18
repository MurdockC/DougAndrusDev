<?php
$pageName = 'Grand Island, NE - Container Hide Hauls';		
$company = 'JBS Carriers';
include('../assets/includes/header.php'); 
?>

<section>
	
	<div class="title_Container">
		<h2><?php echo $pageName; ?></h2>
	</div>
	
	<div class="container primaryContainer space_Around med_Margin med_Margin-top">
		<div style="margin: 0px 0px 20px 0px;"  class="callout">
			<i class="icon fa fa-tachometer" aria-hidden="true"></i>
			<span><h2>Drive strong.</h2>
			<p><b>No freight’s more reliable than food</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-area-chart" aria-hidden="true"></i>
			<span><h2>Make gains.</h2>
			<p><b>Earn between $160 and $287 per trip.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">	
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Enjoy weekly home time.</b></p></span>
		</div>
	</div>
	
	<div class="title_Container">
		<h1>Job Description</h1>
	</div>
	
	<div class="container primaryContainer">
		<div>	
			<h2>Pay</h2>
			<ul>
				<li><b>$160 Round Trip:</b> Grand Island to Omaha/Council Bluffs</li>
				<li><b>$287 Round Trip:</b> Grand Island to Edgerton, KS</li>
				<li><b>$125 Round Trip:</b> Grand Island to Freemont, NE</li>
				<li><b>$15</b> for lining 20’ container; $20 for lining 40’ container</li>
			</ul>
			<h2>Benefits & Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 days</li>
				<li><b>Rider Program:</b> after 90 days; no pets</li>
				<li><b>Bonuses:</b> for fuel efficiency, safety, and retention</li>
			</ul>
			<h2>Work & Route</h2>
			<ul>
				<li><b>Days:</b> typically 5-6 days a week</li>
				<li><b>Delivery Locations:</b> Nebraska and Iowa</li>
				<li><b>Hiring Areas:</b> Grand Island, Omaha, and Council Bluffs</li>
			</ul> 
		</div>
		<div>
			<style>	
				.mapcontainer{
					position: relative;
				}
				.map svg {
					max-width: 400px;
					width: 100%;
				}
				.mapTooltip{
					background: #fff;
					font-size: smaller;
				}
			</style>
			<h2 style="margin-bottom: 20px;">Hiring Area</h2>
			<div class="mapcontainer">
				<div class="map"></div>            
			</div>
		</div>
	</div>
	
</section>

<?php include('../assets/forms/form.php'); ?>

<section  class="white-bg">
	
	<div class="container">	
		<div>
			<h2>Requirements</h2>
			<ul>
				<li>At least 21 years old</li>
				<li>CDL-A with 1 year of tractor trailer experience</li>
				<li>Mentor programs are available for drivers with less than a year of experience</li>
			</ul>
		</div>
		<div>
			<div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/9am1WL4eXf4?rel=0" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>
	
</section>


	<script type="text/javascript" src="https://cdn.rawgit.com/DmitryBaranovskiy/raphael/v2.1.4/raphael-min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/neveldo/jQuery-Mapael/1.1.0/js/jquery.mapael.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/neveldo/jQuery-Mapael/1.1.0/js/maps/usa_states.js"></script>

	<script>
		$(function(){
			$(".mapcontainer").mapael({
				
				map : {	name : "usa_states", defaultArea: {	attrs : { fill : "#999", stroke: "#fff"	}, attrsHover : { fill: "#999" }}},
				
				areas: {		       
			       "AK": {  attrs: { fill: "#fff" },},
			       "HI": {  attrs: { fill: "#fff" },},
				},
				
				plots: {
  				'Grand Island': { type: "circle", size: 20, latitude: 40.926395, longitude: -98.342011, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Grand Island, NE<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>