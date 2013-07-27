<?php
		
			$name = $_POST["fname"];
			$email = $_POST["femail"];
			$message = $_POST["fmessage"];
			$message .= $name;

			// In case any of our lines are larger than 70 characters, we should use wordwrap()
			$message = wordwrap($message, 70, "\r\n");
			
			// Send
			mail('payments@inspiraspanishtutoring.com', $email, $message);
			
?>