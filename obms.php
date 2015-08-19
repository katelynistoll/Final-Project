<?php

if($_POST["submit"]) {
	$recipient="katelynistoll@gmail.com";
	$subject="New Entry for OBMS Mailing List!";

	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$emailaddress=$_POST["emailaddress"];
	$street=$_POST["street"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$zipcode=$_POST["zipcode"];
	$phone=$_POST["phone"];


	$mailBody=
	"First Name: $firstname\n
	Last Name: $lastname\n
	Email: $emailaddress\n
	Street: $street\n
	City: $city\n
	State: $state\n
	Zip Code: $zipcode\n
	Phone: $phone";

	mail($recipient, $subject, $mailBody, "From: NewEntry");

	$thankYou="<p>Thank you for signing up for our mailing list!</p>";
}
?>

<!doctype HTML>

<html>
<head>

	<title>OBMS</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/base.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="obms.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#imageGallery a').on('click', function(){
				$('#placeholder').attr('src', this.href );
				$('#description').html(this.title );
				return false;
			});
		});
	</script>

</head>


<body>
	<div id="navigation">

		<span id="thankyou" style="font-size: 2.5em; position: absolute; top: 13px; left: 200px; background-color: #a1c7fc; border: 2px solid #002147; font-style: italic;"> <?=$thankYou ?> </span>

		<a href="obms.php"><img src="img/OBMSLogo-nowhite.png" alt="logo"></a>
		<h1>Oyster Bay Marine Supply</h1>

		<nav>
			<ul>
				<li><a href="obms.php">Home</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#clubs">Clubs</a></li>
				<li><a href="#photos">Photos</a></li>
				<li><a href="#signup" id="hover" onLoad="showHover('subFeed',0)" onMouseOver="showHover('subFeed',1)" onMouseOut="showHover('subFeed',0)">Sign Up</a></li>
				<li><a href="mailto:obmarinesupply@verizon.net">Contact</a></li>
			</ul>
		</nav>

		<span id="subFeed">
			Sign up to receive<br>our mailing list!
		</span>

	</div> <!--navigation-->

	<div class="wrapper">

		<!---HOME START-->
		<div id="home">

			<table>
				<tr><td>
					<img src="img/OBMS_storefront.jpg" alt="storefront" width="480px"></td>

					<td><p>
						<span class="address">294 South Street<br>
							Oyster Bay, NY 11771<br>
							<a href="javascript:" onclick="window.open('https://www.google.com/maps/place/Oyster+Bay+Marine+Supply/@40.866222,-73.532129,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x4cc3dff19e71fc93');" target="_blank">Get Directions</a>
						</span>
						<br><br>

						(516) 922 - 8010<br><br>
						Monday-Friday: 9:00AM - 5:30PM<br>
						Saturday: 9:00AM - 5:00PM<br>
						Sunday: 9:00AM - 4:00PM<br><br>

						<span class="social">
							<a href="javascript:" onclick="window.open('https://www.facebook.com/pages/Oyster-Bay-Marine-Supply/150879151604437');" target="_blank">Like us on Facebook!</a><br>
							<a href="javascript:" onclick="window.open('https://twitter.com/oysterbaymarine');" target="_blank">Follow us on Twitter!</a><br>
							<a href="javascript:" onclick="window.open('https://instagram.com/obmarinesupply/');" target="_blank">Follow us on Instagram!</a>
						</span></p></td>
					</tr>
				</table>
			</div> <!--home-->

			<div id="about">
				<h2>About Us</h2>
				<p>   Open since 1986, Oyster Bay Marine Supply is committed to providing all necessary equipment for a variety of outdoor marine activities. From fishing and clamming to water skiing and tubing, we have everything you'll need for a great day out on the water!</p>
				<blockquote>"We're here for all of your boating needs!"</blockquote>
			</div> <!--about-->

			<!---PRODUCTS START-->
			<div id="products">
				<h2>Products</h2>
				<div class="pic">
					<img src="img/poles.jpg" alt="Poles and Reels">
					<ul>
						<li class="title">Poles and Reels</li>
					</ul></div>
					<div class="pic">
						<img src="img/tackle.jpg" alt="Fishing Tackle">

						<ul>
							<li class="title">Fishing Tackle</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/bunker.jpg" alt="Fresh Bunker">

						<ul>
							<li class="title">Fresh and Frozen Bait</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/lifevest.jpg" alt="Life Vests">

						<ul>
							<li class="title">Boating Supplies</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/safety.jpg" alt="Safety Equipment">

						<ul>
							<li class="title">Safety Equipment</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/trailer.jpg" alt="Boat Parts">
						<ul>
							<li class="title">Engine Maintenance Parts</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/boat.jpg" alt="Inflatable Boat">
						<ul>
							<li class="title">Mercury Inflatables</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/mooring.jpg" alt="Mooring Hardward">
						<ul>
							<li class="title">Mooring Hardware</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/sports.jpg" alt="Water Skiis">
						<ul>
							<li class="title">Water Sporting Goods</li>
						</ul>
					</div>
					<div class="pic">
						<img src="img/rain.jpg" alt="Rain Gear">
						<ul>
							<li class="title">Foul Weather Gear</li>
						</ul>
					</div>

				</div> <!--products-->

				<!---CLUBS START-->
				<div id="clubs">
					<h2>Clubs</h2>
					<div><h4>OBMS Leader's Board</h4>
						We keep track of the top ten fish for all species for the entire season, as well as all time records.<br><br>

						Inquire in store to sign up or call (516) 922-8010!<br><br>

						DOWNLOADS
						<ul>
							<li><a href="doc/2015standings.pdf">2015 Point Standings (Through 8/15)</a></li>
							<li><a href="doc/2015derby.pdf">2015 Derby Schedule</a></li>
							<li><a href="doc/2014standings.pdf">2014 Final Point Standings</a></li>
							<li><a href="doc/2014derby.pdf">2014 Derby Schedule</a></li>
						</ul><br>

						<h4>Oyster Bay Anglers</h4>
						Meets 1st Monday of Every Month<br>
						Oyster Bay, NY 11771-0085<br>
						(516) 922-5413</div>
					</div> <!--clubs-->

					<!---PHOTOS START-->
					<div id="photos">
						<h2>Photos</h2>

						<div id="imageGallery">

							<div class="pic">
								<a href="img/img1.jpg" title="Store owner, Tom, and employee, Brett, show off their stripers after a successful fishing trip!"><img src="img/img1.jpg" alt="Men with Fish"></a>
							</div>

							<div class="pic">
								<a href="img/img10.jpg" title="Posted on facebook with the caption:<br><br> 'Two happy customers!! Thanks OBMS!'"><img src="img/img10.jpg" alt="Kayakers"></a>
							</div>

							<div class="pic">
								<a href="img/img2.jpg" title="Happy Birthday to Skipper the Dog.
								<br><br>8 consecutive Employee of the Year Awards!"><img src="img/img2.jpg" alt="store dog"></a>
							</div>

							<div class="pic">
								<a href="img/img3.jpg" title="OBMS represented at the New York Sportfishing Federation Show at the Freeport Recreation Center with special deals and discounts on merchandise!<br><br> Rods, reels, jackets, gloves, and more!"><img src="img/img3.jpg" alt="Trade Show"></a>
							</div>

							<div class="pic">
								<a href="img/img4.jpg" title="The stage is set for the 28th Annual Oyster Bay Marine Supply Bluefish Tournament!"><img src="img/img4.jpg" alt="Stage"></a>
							</div>

							<div class="pic">
								<a href="img/img5.jpg" title="Some raffle winners display their prizes."><img src="img/img5.jpg" alt="Raffle Winners"></a>
							</div>

							<div class="pic">
								<a href="img/img6.jpg" title="The fishermen that brought in the Top 15 bluefish pose with their plaques."><img src="img/img6.jpg" alt="Winners"></a>
							</div>

							<div class="pic">
								<a href="img/img7.jpg" title="1st Place Bluefish<br><br>15.48lbs.!!!!"><img src="img/img7.jpg" alt="Bluefish"></a>
							</div>

							<div class="pic">
								<a href="img/img8.jpg" title="Some fishermen carrying in their bluefish."><img src="img/img8.jpg" alt="Fishermen"></a>
							</div>

							<div class="pic">
								<a href="img/img9.jpg" title="Two boys comparing bluefish. Aw!!"><img src="img/img9.jpg" alt="Two Boys"></a>
							</div>

						</div> <!--imageGallery-->

						<table>
							<tr>
								<td><p id="description"><br><br>CLICK<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THROUGH<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMAGES!</p></td>
								<td><img id="placeholder" src="img/OBMS_storefront.jpg" alt="Placeholder"></td>

							</tr>
						</table>
					</div> <!--photos-->

					<!---SIGN UP START-->
					<div id="signup">
						<h2>Sign Up</h2>
						<h3>to receive our mailing list!</h3>

						<form name="signup1" method="post" action="obms.php" onSubmit='return validate()'>

							<fieldset>
								<legend><u>Note:</u> All fields are required.</legend>
								<div class="formdata">
									<table>
										<tr><td><b>First Name:</b></td><td><input type=text name=firstname size=40></td></tr>

										<tr><td><b>Last Name:</b></td><td><input type=text name=lastname size=40></td></tr>

										<tr><td><b>Email Address:</b></td><td><input type=text name=emailaddress size=40></td></tr>

										<tr><td><b>Street:</b></td><td><input type=text name=street size=40></td></tr>

										<tr><td><b>City:</b></td><td><input type=text name=city size=40></td></tr>

										<tr>
											<td><b>State:</b></td>
											<td><select name=state>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY" selected>New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South DakoTennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
										</td>
									</tr>

									<tr><td><b>Zip Code:</b></td><td><input type=text name=zipcode size=40></td></tr>

									<tr><td><b>Phone:</b></td><td><input type=text name=phone size=40></td></tr>

									<tr>
										<td></td>
										<td><input type="submit" name="submit">
											<input type=reset  value='Clear All'></td>
										</tr>
									</table></div> <!--formdata-->
								</fieldset>
							</form>

						</div> <!--signup-->

					</div> <!--wrapper-->

				</body>
				</html>