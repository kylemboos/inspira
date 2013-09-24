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
	h4 {
	text-align:justify;
	}
	p{
	text-align:justify;
	}
	
	.jumbotron .btn {
	font-size: 21px;
	padding: 14px 24px;
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
				<li><a href="testimonials.php">Testimonials</a></li>
				<li><a href="presources.php">Parents</a></li>
				<li><a href="sresources.php">Students</a></li>
				<li class="active"><a href="employment.php">Employment</a></li>
			</ul>
			<a href="index.php"><img src="assets/img/test.jpg"></img></a>
		</div>
		<hr>
		<div class="jumbotron">
			<div class="row-fluid marketing">
				<div class="span6 offset3">
					<h1>Apply Now!</h1>
					<hr>
					<form>
						<div class="controls ">
							<input id="name" name="name" type="text" class="span4" placeholder="Name" />
							<input id="email" name="email" type="text" class="span4" placeholder=
								"Email address" />
							<input id="phone" name="phone" type="text" class="span4" placeholder="Phone" />
						</div>
						<div class="controls">
							<textarea id="message" name="message" class="span12" placeholder="Please paste the completed application below AND your current resume in this field." rows=
								"5"></textarea>
						</div>
						<div class="controls">
							<button id="contact-submit" onclick="sendApplication()" type="submit" class=
								"btn btn-primary input-medium">Send</button>
						</div>
					</form>
					<hr/><br/>
					<h3>Application</h3></hr>
					<h4>Please list which cities you are available to tutor in:</h4>
					</br>
					<h4>Please indicate the levels of Spanish you feel qualified to tutor.</h4>
					<p>Conversational</br>
					Grammatical</br>
					Advanced Placement/SAT Preperation</br>
					Beginner</p>
					<h4>Education</h4>
					<p>Please list relevant courses in Spanish that you have taken:</P>
					<h4>Exams Passed, score, and year taken (if not taken please write N/A)</h4>
					<p>AP Spanish Language:</br>
					AP Spanish Literature</br>
					IB Spanish Exam:</br>
					SAT II Spanish:</br>
					Other relevant exams or certifications:</p>
					<h4>Other Honors and Achievements</h4>	
					<p>Please list any awards, clubs, or travel experience that have helped you improve your Spanish or
					have given you experience in teaching:</p>
					<h4>Personal Goals and Interests</h4>
					<p>Please explain why you would like to help others learn Spanish. Also, we would like to know if you
					have any special goals as a tutor; do you like to work with children, college students, no preference?</br>	
					Do you have any specialties like grammar, writing essays, or conversational Spanish?</p>
					<h4>Availability</h4>	
					<p>Earliest start date:</br>
					Hours available per week:</p>
					<p>**Since this is not a full time position and client volume changes frequently, please indicate if you
					would be interested in being contacted in the future to tutor if we do not currently have a need for 
					extra tutors**</p>
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