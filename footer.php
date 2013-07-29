    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript">
	</script><script src="bootstrap/js/bootstrap.js" type="text/javascript">
	</script><script type="text/javascript">
//<![CDATA[
/*
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
        */
		
		function sendMail(e) {
				e.preventDefault();
				 var name = $('#name').val();
                 var email = $('#email').val();
                 var message = $('#message').val();
				 
				 if(name == ("" || " ") || email == ("" || " ") || message == ("" || " ")){
					alert("Please fill out all fields!");
				 }
				 else{
			$.post("sendMail.php", {fname:name, femail:email, fmessage:message}, function(data){
				console.log(data);
				document.location.reload(true);
				messageSent();
			});
				
					}
		}
		
		function messageSent(){
			alert("Message Sent!");
			}
		
		
		$("#contact-submit").click(sendMail);
    //]]>
    </script>
  </body>
</html>