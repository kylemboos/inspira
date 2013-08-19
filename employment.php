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
		<h1>Services</h1>
		<hr>
		 <h3>Private and Group Home Tutoring</h3>
          <p>We specialize in catering to our clients’ needs by travelling to their homes to conduct lessons. One-on-one tutoring is our most common service offered, however we also provide lessons for small groups of students that have relatively the same level of understanding of Spanish. Prices will vary depending on the size of the groups.</p>
  <br>
           <h3>Live Web Seminars</h3>
          <p>Travel often? Work odd hours? No problem! Let us help you learn Spanish from the web. We are able to connect with clients via the internet and conduct sessions with audio and visual aids to simulate a private face-to-face session. We strive to break the boundaries of traditional tutoring and cater to the learning style of each individual, and for some students web-based tutoring is the most effective way to learn a language.</p>
		 <br>
        <h3>Language and Culture Corporate Crash Courses</h3>
         <p>Is your company thinking of expanding into the emerging Latin American markets or planning a business trip to Spain? We’ve got you covered! In today’s world, knowing the political, social, and historical aspects of a particular person’s culture can be the key to gaining their trust, and their business. We will provide you with not only linguistic information of your area of interest, but also cultural insight. Our staff will travel to your office and provide a “crash course” on the region your business is beginning to reach out to.</p>
        
 <br>
           <h3>Online Resources</h3>
          <p>All of our students are given access to supplemental information and resources that are not provided by teachers or other instructors. We have created worksheets, examples, and online video tutorials on various subjects for students that would like to practice their Spanish outside of tutoring sessions.</p>
<br>        
		<h3>SAT/AP Test Prep</h3>
          <p>Our tutors and educators are specialized in teaching curriculum that will appear on standardized tests. We focus on grammar, oral, and written skills that are vital to passing these rigorous tests. Timed multiple choice and reading questions will help students master the timed sections on tests, and feel more confident on test day.</p>
          
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
    </div><!-- /container -->
   <?php include 'footer.php'; ?>
