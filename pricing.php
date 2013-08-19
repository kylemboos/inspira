<?php include 'header.php'; ?>
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 350px;
      }
	  .container-narrow-text {
        margin: 0 auto;
        max-width: 400px;
      }
	  .container-text {
        margin: 0 auto;
        max-width: 750px;
      }
	  
	  .question-text {
        margin: 0 auto;
		text-align: center;
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
		  <li class="active"><a href="pricing.php">Pricing</a></li>
		  <li><a href="tutors.php">Tutors</a></li>
		  <li><a href="testimonials.php">Testimonials</a></li>
		  <li><a href="presources.php">Parents</a></li>
		  <li><a href="sresources.php">Students</a></li>
		  <li><a href="employment.php">Employment</a></li>


        </ul>
		
		<a href="index.php"><img src="assets/img/test.jpg"></img></a>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Pricing</h1>
		<hr>
		<div class = "container-text">
		At Inspira Spanish Tutoring we offer pre-paid packages of tutoring lessons that allow us to better serve the client. Language is learned through practice and repetition, and by committing to a set amount of hours, we have found that students are more motivated to stay on track with their language learning.
		</div>
		<br>
			<table class="table table-bordered table-striped container-narrow">
			
			<thead>
              <tr>
                <th>Package</th>
                <th>Rate</th>
              </tr>
            </thead>
				<tbody>
              <tr>
                <td>
                  Flat Rate
                </td>
                <td>
                  $40.00 / hour
                </td>
              </tr>
			   <tr>
                <td>
                  5 Hours
                </td>
                <td>
                  $175.00 @ $35.00 / hour
                </td>
              </tr>
			   <tr>
                <td>
                  10 Hours
                </td>
                <td>
                  $300.00 @ $30.00 / hour
                </td>
              </tr>
			   <tr>
                <td>
                  15+ Hours
                </td>
                <td>
                  $375.00 @ $25.00 / hour
                </td>
              </tr>
            </tbody>
			</table>
			<br>
			<div class = "container-narrow-text">
				<p>*First session is an assessment and is free of charge. Paid packages begin at the second tutoring session once lesson plans can be created and implemented effectively.</p>
     			
			</div>
			
	 </div>
		
			<p class="question-text">If you should have any questions regarding our rates and services please fill out the form below.</p>
			

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
