<?php include 'header.php'; ?>
<style type="text/css">
	body {
	padding-top: 20px;
	padding-bottom: 40px;
	}
	/* Custom container */
	.container-narrow {
	margin: 0 auto;
	max-width: 700px;
	}
	.container-narrow > hr {
	margin: 30px 0;
	}
	/* Main marketing message and sign up button */
	.jumbotron {
	margin: 60px 0;
	text-align: center;
	}
	.jumbotron h1 {
	font-size: 48px;
	line-height: 1;
	}
	.jumbotron .btn {
	font-size: 21px;
	padding: 14px 24px;
	}
	.jumbotron p{
	text-align: justify;
	}
	.testimonial {
	}
	/* Supporting marketing content */
	.marketing {
	margin: 60px 0;
	}
	.marketing p + h4 {
	margin-top: 28px;
	}
</style>
<body>
	<?php include_once("analytics.php") ?>
	<div class="container">
		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="pricing.php">Pricing</a></li>
				<li><a href="tutors.php">Tutors</a></li>
				<li class="active"><a href="testimonials.php">Testimonials</a></li>
				<li><a href="presources.php">Parents</a></li>
				<li><a href="sresources.php">Students</a></li>
				<li><a href="employment.php">Employment</a></li>
			</ul>
			<a href="index.php"><img src="assets/img/test.jpg"></img></a>
		</div>
		<hr>
		<div class="jumbotron">
			<div class="row-fluid marketing">
				<div class="span6 offset3">
					<h1>Testimonials</h1>
					<hr>
					<div class ="testimonial">
						<p>
							"Being tutored by Jaclyn was and still remains one of the most rewarding experiences I have had the pleasure of gaining during my academic journey through college. Initially, I was apprehensive about taking Spanish courses to fulfill my requirements for both my humanities majors; however with Jaclyn's unrelenting encouragement and enthusiasm, I shed my reluctance and grew a genuine interest in learning more about Spanish culture. From this blossoming admiration, I have become inspired to one day be fluent in Spanish as well as travel abroad to indulge in its rich culture. Jaclyn is extremely proficient, diligent, organized, and most importantly- approachable. She makes the learning experience enjoyable, which is a nice change of pace from the dull classroom setting. I am thoroughly indebted to her and recommend her services, you will not be disappointed."		  
						</p>
						<p style="text-align:right; font-style: italic;">
							-Caroline Kim, UC Irvine
						</p>
						<br>
						<br>
					</div>
					<div class ="testimonial">
						<p>
							"Jaclyn was my daughter’s tutor for over a year and she helped her with Spanish language and Spanish literature IB courses. She was very flexible and it was convenient that she came to our home to conduct lessons. My daughter was able to maintain an A in her Spanish courses and become more comfortable with reading and speaking in Spanish, and she will be attending a top ranking university in the fall. We are very happy with the services we received and we highly recommend Inspira Spanish Tutoring!"
						</p>
						<p style="text-align:right; font-style: italic;">
							Elizabeth – Costa Mesa, CA
						</p>
						<br>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="footer row-fluid marketing">
			<div class="span5 offset1">
				<h3>
					Contact Us
				</h3>
				<form>
					<div class="controls controls-row">
						<input id="name" name="name" type="text" class="span5" placeholder="Name" />
						<input id="email" name="email" type="text" class="span5" placeholder=
							"Email address" />
					</div>
					<div class="controls">
						<textarea id="message" name="message" class="span10" placeholder="Your Message" rows=
							"5">
						</textarea>
					</div>
					<div class="controls">
						<button id="contact-submit" onclick="sendMail()" type="submit" class=
							"btn btn-primary input-medium">Send</button>
					</div>
				</form>
			</div>
			<div class="span4 offset1">
				<br />
				<br />
				<img src="assets/img/logoni.jpg" alt="Image" /><br />
				<p>Irvine, CA<br>(949) 529 - 1832<br>Monday-Friday 10:00 AM - 6:00 PM <br><a>info@inspiraspanishtutoring.com</a></p>
				<a href="https://www.facebook.com/InspiraSpanishTutoring"><img src="assets/img/fb.jpg"/></a>
				<a href="https://twitter.com/InspiraTutoring"><img src="assets/img/tw.jpg"/></a>
				<a href = "http://www.linkedin.com/company/inspira-spanish-tutoring"><img src="assets/img/li.jpg"/></a>
			</div>
		</div>
	</div>
	<!-- /container -->
	<?php include 'footer.php'; ?>