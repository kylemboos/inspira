<?php include 'header.php'; ?>   
<style type="text/css">
	body {
	padding-top: 20px;
	padding-bottom: 40px;
	}
	/* Custom container */
	.container-narrow {
	margin: 0 auto;
	max-width: 2000px;
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
	.jumbotron p {
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
	<div class="container-narrow">
		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="pricing.php">Pricing</a></li>
				<li><a href="tutors.php">Tutors</a></li>
				<li><a href="testimonials.php">Testimonials</a></li>
				<li class="active"><a href="presources.php">Parents</a></li>
				<li><a href="sresources.php">Students</a></li>
				<li><a href="employment.php">Employment</a></li>
			</ul>
			<a href="index.php"><img src="assets/img/test.jpg"></img></a>
		</div>
		<hr>
		<div class="jumbotron">
			<div class="row-fluid marketing">
				<div class="span6 offset3">
					<h2>Parent Resources</h2>
					<hr>
					<p>
					At Inspira Spanish Tutoring we understand that parents want the best for their children. Our tutors are dedicated to helping your son or daughter succeed in their Spanish classes by reinforcing tricky concepts and grammar taught in the classroom in the comfort of your home. For parents that wish to further help their children, but may not speak Spanish, we have free online resources to help you further your child's educational experience!
					</p>
					<p>
					We offer a vocabulary list that is updated monthly that parents can use to quiz their child's knowledge, or introduce them to new vocabulary that they have yet to encounter. We choose words that are common and practical; these words can be used in basic and advanced conversation and are used often in films, TV shows, books, etc. Try and encourage your child to learn a few extra words each month to give them the edge over other students in their classes. 
					</p>
					<p>
					Inspira Spanish Tutoring also recommends various Spanish language films, short stories by acclaimed Spanish-speaking authors, and several restaurants in Orange County that can help Spanish student's gain valuable listening, reading, and oral skills. Engaging in other activities outside of the classroom allows students to exponentially increase their chances of retaining their Spanish over students that do not put any extra effort into learning a language. We challenge parents to take their children out to dinner at Hispanic and Spanish restaurants to try new cuisine and order in Spanish. These types of activities help students gain the confidence to speak in a public setting, allowing them to orally present in class without feeling nervous and unprepared. 
					</p>
					<p>
					Check our website regularly to see how you can continue to help your child further improve their Spanish! 
					</p>
					<h3>Monthly Word List</h3>
					<p>coming soon..</p>
					<br>
					<h3>Study Tips</h3>
					<p>
					</p>
						<a href="http://markmanson.net/foreign-language">Learning a Foreign Language</a>
					
					</br>
					</br>
					<h3>Privacy Policy</h3>
					<p>
					   <strong>Testimonials:</strong></br>
					   This website, InspiraSpanishTutoring.com recognizes the importance of explaining
					   our privacy policies to users of our Site and protecting the privacy of Personally 
					   Identifiable Information we obtain through the site. Please note that this Privacy 
					   Statement may be revised from time to time, and that we will post the revised policy 
					   here with the date it is effective. If you should have any concerns or questions about 
					   privacy on this Site, please contact us via the form below.
					</p>
					<p>
					   <strong>Student Information:</strong></br>
					   Online testimonials used by Inspira Spanish Tutoring are completely voluntary and
					   will not be posted without the Client's approval. Names and location of the Client or 
					   the Student are changed in order to protect Client's privacy upon request.
					</p>
					<p>
						<strong>Email:</strong></br>
						We will only record your email address if you send us a message or submit it to
						us as part of the user registration process. We will only use your email address to
						respond to a message from you or to communicate with you regarding tutoring
						sessions. In some cases, clients will be sent emails as part of a newsletter process
						and can opt out of this at any point by clicking "unsubscribe." These newsletters are 
						optional anyone receiving the newsletter cannot see the list of recipients, further 
						protecting your identity.
					</p>
					<p>
						<strong>Other Websites:</strong></br>
						This website may contain links to other web resources, including websites of
						organizations other than Inspira Spanish Tutoring. These third party sites may also
						collect user-identifying information directly from you once you proceed to browse
						those sites. Inspira Spanish Tutoring is not responsible for the privacy policies of 
						third party sites to which we provide hyperlinks or access. Please visit the relevant 
						sites to review their privacy policies.
					</p>
					<p>
						<strong>Google Analytics:</strong></br>
						InpiraSpanishTutoring.com uses Google Analytics software to perform Site usage
					</p>
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