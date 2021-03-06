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
	font-size: 72px;
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
	<div class="container">
		<div class="masthead">
			<ul class="nav nav-pills pull-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="pricing.php">Pricing</a></li>
				<li><a href="tutors.php">Tutors</a></li>
				<li><a href="testimonials.php">Testimonials</a></li>
				<li><a href="presources.php">Parents</a></li>
				<li class="active"><a href="sresources.php">Students</a></li>
				<li><a href="employment.php">Employment</a></li>
			</ul>
			<a href="index.php"><img src="assets/img/test.jpg"></img></a>
		</div>
		<hr>
		<div class="jumbotron">
			<div class="row-fluid marketing">
				<div class="span6 offset3">
					<h2>Student Resources</h2>
					<hr>
					<h4> <a href="http://wordreference.com/">Wordreference.com</a></h4>
					<p>
						This site functions like a dictionary or a translator, but it also
						provides additional information. There are threads on particular words that 
						describe common phrases and idioms they are used with. It also defines words 
						according to geographical location because in some cases words vary greatly with 
						distance.
					</p>
					<br>
					<h4><a href="http://www.rae.es/">RAE</a></h4>
					<p>
					The RAE, in English, stands for the Royal Spanish Academy that is based 
					in Madrid, Spain and is associated with national language academies in twentyone other Spanish speaking nations in the world. This institution is dedicated to 
					all things having to do with the Spanish language such as adding new words to the
					dictionary, linguistic unity between territories, and other changes to the Spanish language.
					</p>
					</br>
					<h4><a href="http://www.elmundo.es/diccionarios/index.html?a=9423554f2cb4364ef01a9eecbacf40f9&t=1281454584">Synonyms/Antonyms</a></h4>
					<p>
					This website is useful for students in higher level Spanish classes that involve essay
					writing. Students can search for synonyms and antonyms in order to diversify their language and expand their vocabulary.
					</p>
					</br>
					<h4><a href="http://www.usembassy.gov/">Embassies</a></h4>
					<p>
					For those interested in travelling, here is a list of the Embassies. Their websites not
					only contain travel tips, but also cultural information and interesting facts about
					their countries. Browsing and Embassy site can help students with school projects
					that urge them to research the culture, food, or music from Spanish speaking countries.
					
					</p>
					</br>
					<h4>Online Radio/Newspaper Resources</h4>
					<p>
					Below are various resources to help students improve their reading and listening
					skills in Spanish.
					</p>
						<a href="http://www.listenlive.eu/spain.html">Listenlive.eu</a></br>
						<a href="http://tunein.com/radio/Spanish-Music-c57945/">Tuinein.com</a>
					</br>
					</br>
					<h4><a href="http://spanish.about.com/od/spanishlanguagecinema/tp/popular_films.htm">Top Movies in Spanish</a></h4>
					<p>
					A list of highly ranked Spanish movies !
					</p>
					</br>
					<h4>Important Literature by Spanish Authors</h4>
					<p>
					For those interested in a good read, try browsing through the following sites. Many
					of these titles have been translated into English for those that do not possess an 
					advanced level of Spanish.
					</p>
					
						<a href="http://www.goodreads.com/list/show/262.Libros_en_Espa_ol">Goodreads.com</a></br>
						<a href="http://conversationalreading.com/top-25-spanish-language-novels-written-since-1982/">Conversationalreading.com</a>
					
					</br>
					</br>
					<h4>Study Tips</h4>
					<p>
					Here are some helpful tips and tools to learning a foreign language. Our skilled
					tutors help students understand the concepts of Spanish vocabulary and grammar, 
					but there are many other ways that dedicated students can continue to study
					Spanish outside of tutoring sessions. Check out the methods used by other students 
					of language that have helped them become bilingual! 
					</br>
					</p>
						<a href="http://markmanson.net/foreign-language">Learning a Foreign Language</a>
					
				</div>
			</div>
		</div>
		<hr>
		<div class="footer row-fluid marketing">
			<div class="span5 offset1">
				<h4>
					Contact Us
				</h4>
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