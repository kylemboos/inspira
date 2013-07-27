<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="generator" content=
    "HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
    <meta charset="utf-8" />
    <title>
      Inspira Spanish Tutoring
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" /><!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
/*<![CDATA[*/
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
          
          .backlogo {
        background-image: url(/assets/img/400.jpg);
                background-repeat:no-repeat;
                background-position: center center;
                
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
          .center {
     float: none;
     margin-left: auto;
     margin-right: auto;
        }
        .blank-holder{
        height: 77px;
        width: 241px;
        }
        #jumbo-back
        {
                background-image:url('assets/img/jumbo.jpg');
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-position:center;
        }
        #tw-img{
                background-image:"assets/img/tw.jpg";
        }
        #li-img{
                background-image:"assets/img/li.jpg";
        }
          .centered-pills { text-align:center; }
    .centered-pills ul.nav-pills { display:inline-block; }
    .centered-pills li { display:inline; }
    .centered-pills a { float:left; }
    * html .centered-pills ul.nav-pills { display:inline; } /* IE6 */
    *+html .centered-pills ul.nav-pills { display:inline; } /* IE7 */
    /*]]>*/
    </style><!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href=
    "../assets/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=
    "../assets/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=
    "../assets/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href=
    "../assets/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="../assets/ico/favicon.png" />
	
	
  </head>
  <body>
    <div class="container">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active">
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="services.php">Services</a>
          </li>
          <li>
            <a href="pricing.php">Pricing</a>
          </li>
          <li>
            <a href="tutors.php">Tutors</a>
          </li>
          <li>
            <a href="testimonials.php">Testimonials</a>
          </li>
        </ul><a href="index.php"><img src="assets/img/test.jpg" alt="Image" /></a>
      </div><br />
      <hr />
      <div class="jumbotron">
        <img src="assets/img/biglogo.jpg" alt="Image" /><br />
        <br />
        <p class="lead">
          Inspira Spanish Tutoring offers private and group tutoring lessons for all levels of
          Spanish learners. Our staff aims not only to help students of Spanish, but also to urge
          the retention of language in order to work towards bilingualism. Our skilled team of
          tutors consists of individuals that have a passion for teaching and promoting the Spanish
          language. All of our instructors are friendly, patient, and aspire to motivate students
          to become fluent in Spanish.
        </p><a class="btn btn-large btn-success" href="services.php">Services</a><br />
      </div>
      <hr />
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
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript">
		function sendMail(){
		console.log("SEND MAIL FUNCTION");
		 var name = $('#name').val();
		 var email = $('#email').val();
		 var message = $('#message').val();
		 
			$.post("sendMail.php", {fname:name, femail:email, fmessage:message})
			.done(function() {
				alert("Message Sent!");
			}).fail(function(error){
				console.log(error);
			});
		
	}
	
	</script>
	
  </body>
</html>
