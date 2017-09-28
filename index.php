<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";

	include('assets/includes/header.php');
?>
<header>
		    <div class="container full-width light-bg flex centered-contents padding-lg">
		        <div class="container width-1200 flex nav">
		            <img class="logo" src="assets/images/logo.png" alt="Company Logo">
		            <span class="desktop-hidden flex">
									<a onclick="doThis()">
										<div class="nav-icon-container flex">
											<div class="nav-icon-text">
													Menu
											</div>
											<div class="nav-icon">
													<div class="icon-bar"></div>
													<div class="icon-bar"></div>
													<div class="icon-bar"></div>
											</div>
									</div>
		            </a>
							</span>
							<span class="desktop-visible">
								<a href="#">
		                <button class="button-secondary flex centered-contents padding-md margin-sm">Company Driver</button>
		            </a>
		            <a href="#">
		                <button class="button-secondary flex centered-contents padding-md margin-sm">Owner Operator</button>
		            </a>
							</span>
		        </div>
		    </div>
		    <!-- below content is hidden until hamburger button is pushed -->
		    <div id="thisContent" class="mobile-nav flex-column-sm container">
		        <a href="#">
		            <div class="button-primary flex centered-contents padding-lg margin-sm">Give us a Call!</div>
		        </a>
		        <a href="#">
		            <div class="button-secondary flex centered-contents padding-lg margin-sm">Company Driver</div>
		        </a>
		        <a href="#">
		            <div class="button-secondary flex centered-contents padding-lg margin-sm">Owner Operator</div>
		        </a>
		    </div>

		    <!-- this div becomes hidden while viewing mobile nav -->
		    <section id="campaign" class="container fullwidth campaign-bg flex centered-contents">
		        <div class="container width-1200 flex  margin-tb-lg wrap">
		            <div class="flex margin-lg flex-column-sm white-text ">
		                <h1 class="margin-lg text-left margin-tb-sm">Same miles.<br> More money.</h1>
		                <h6 class="margin-lg text-left margin-tb-sm ">Like always, our drivers can count on reliable mileage, but now they're earning more per mile-up to 42 CPM between base pay and bonuses. New hires also receive a guaranteed two-cent bonus on top of their base rate for the first six months.</h6>
		                <button class="button-primary button-campaign margin-lg margin-tb-sm">Apply Now!</button>
		                <button class="button-secondary-light button-campaign margin-lg margin-tb-sm">Be Contacted!</button>
		            </div>
		            <div class="flex margin-lg flex-column-sm centered-contents">
		                <img class="truck absolute" src="assets/images/truck.png" alt="Truck">
		            </div>
		        </div>
		    </section>
		</header>

		<div id="mobile-hide">
		    <section id="body-content" class="container full-width white-bg centered-contents flex-column flex">
						<div class="container width-1200 flex flex-column wrap">
							<div class="margin-lg container width-960 margin-tb-sm padding-lg ">
								<h2 class="margin-sm margin-tb-md ">Reasons to Drive Doug Andrus</h2>
								<p class="text-left margin-sm margin-tb-sm padding-sm ">It's been 75 years since the first Andrus family member hauled freight for a customer. Since then, everyone who drives for Doug Andrus Distributing has been treated like family - enjoying an atmosphere of respect, flexibility and support. Headquartered in Idaho Falls, ID, Doug Andrus Distributing serves customers across America, dealing in a variety of products. Doug Andrus offers regional and OTR fleet services and provides drivers 	with high quality, late model equipment - Freightliners and Peterbilts.</p>
							</div>
						</div>
					  <div class="container width-1200 flex wrap">

		            <div class="flex margin-lg flex-column-sm">
										<h2 class="margin-lg margin-tb-sm text-left">The Pay</h2>
										<h6 class="margin-lg margin-tb-sm text-left">Mileage Pay Based on Driving Experience</h6>
		                <ul class="margin-tb-sm margin-md">

		                    <li class="margin-tb-xs text-left">
		                        31 CPM - 0 to 6 Months
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        32 CPM - 6 to 12 Months
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        33 CPM - 12 to 18 Months
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        34 CPM - 18 to 24 Months
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        35 CPM - 24 to 30 Months
		                    </li>
												<li class="margin-tb-md text-left">
		                      	 36 CPM - 30 to 36 Months
		                    </li>
												<li class="margin-tb-md text-left">
		                        37 CPM - 36+ Months
		                    </li>
		                </ul>
										<h6 class="margin-lg margin-tb-sm text-left">Bonuses</h2>
		                <ul class="margin-tb-sm margin-md">
		                    <li class="margin-tb-md text-left">
		                        Safety - 1 CPM, based on incident-free driving
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        Mileage - 0 to 2 CPM, based on level of miles*
		                    </li>
		                    <li class="margin-tb-md text-left">
		                        Fuel - 0 to 2 CPM, based on fuel efficiency*
		                    </li>
												* All new drivers get a guaranteed 1 CPM bonus for both mileage and fuel for their first six months.
		                </ul>
		            </div>
		            <div class="flex margin-lg flex-column-sm">
									<h2 class="margin-lg margin-tb-sm text-left">The Benefits</h2>
									<ul class="margin-tb-sm margin-md">
											<li class="margin-tb-xs text-left">
												Low-Cost Health Plan with BlueCross of Idaho — from $30/month for single coverage to $456/month for large families
											</li>
											<li class="margin-tb-md text-left">
												Many Supplemental Benefits — dental, vision, life, and flexible spending
											</li>
											<li class="margin-tb-md text-left">
												Money for Retirement — a program to help you automatically save
											</li>
											<li class="margin-tb-md text-left">
												Paid Time Off — vacation and holidays
											</li>
									</ul>
									<h2 class="margin-lg margin-tb-sm text-left">The Drive</h2>
									<ul class="margin-tb-sm margin-md">
											<li class="margin-tb-xs text-left">
												Late Model Trucks — Freightliners and Peterbilts
											</li>
											<li class="margin-tb-md text-left">
												Very Reliable Miles — 2,800 to 3,200 a week (average haul is 1,250 miles)
											</li>
											<li class="margin-tb-md text-left">
												Mostly No-Touch Freight — You’ll drive, not load.
											</li>
											<li class="margin-tb-md text-left">
												Rider Program — Take your family on your route.
											</li>
											<li class="margin-tb-md text-left">
												Home Time — 1 day home for every 7 out (average time out is 8 days)
											</li>
									</ul>
									<h2 class="margin-lg margin-tb-sm text-left">The Training</h2>
									<p class="margin-lg margin-tb-sm text-left">For Recent CDL Graduates</p>
									<ul class="margin-tb-sm margin-md">
											<li class="margin-tb-xs text-left">
												Comprehensive Instruction — with a certified trainer
											</li>
											<li class="margin-tb-md text-left">
												6 Weeks — 2 local and 4 OTR
											</li>
											<li class="margin-tb-md text-left">
												Training Pay — $75/day
											</li>
											<li class="margin-tb-md text-left">
												Guaranteed Starting Rate — 34 CPM for the first six months
											</li>
									</ul>
		            </div>
		        </div>
		    </section>

		    <section id="form" class="container full-width primary-bg centered-contents padding-tb-xl flex margin-tb-lg flex-column">
					<?php include ('assets/forms/form.php'); ?>
		    </section>

		    <section id="secondary-content" class="container full-width light-bg centered-contents flex-column flex">
		        <div class="container width-960 flex wrap">
		            <div class="flex margin-lg  flex-column-sm">
		                <h6 class="margin-md ">WHAT DRIVERS ARE SAYING</h6>
		                <div class="flex-column-sm">
		                    <blockquote class="text-left margin-lg quote ">"The best thing about working for Doug Andrus is that the owners are always working to improve the company by thinking of their drivers. The truck shop is always friendly and fix the trucks as soon as possible if there are any problems. When you walk into the office it feels like you are walking into your own home. The dispatchers are friendly and always answer my questions the best way possible."<br><br><cite>Cilviano Nochebuena 7.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
								<div class="flex margin-lg  flex-column-sm">
		                <h6 class="margin-md ">WHAT DRIVERS ARE SAYING</h6>
		                <div class="flex-column-sm">
		                    <blockquote class="text-left margin-lg quote">I enjoy working for Andrus because they try to take care of you. If you have a problem, they try to fix it. You never have to worry about getting paid, it's there. The people in the office take care of you if there is ever a problem. <br><br><cite>Rob Howell, 26.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
		        </div>
						<div class="container width-960 flex wrap padding-lg">
							<div class="iframe-container flex">
							<iframe src="https://www.youtube.com/embed/8BRWESBwOt0" frameborder="0" allowfullscreen>
							</iframe>
						</div>
						</div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>
