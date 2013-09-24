<?php
		
			$name = $_POST["fname"];
			$email = $_POST["femail"];
			$phone = $_POST["fphone"];
			$message = $_POST["fmessage"];
			$message .=  ' - ' . $email . ' - ' . $phone;

			// In case any of our lines are larger than 70 characters, we should use wordwrap()
			$message = wordwrap($message, 70, "\r\n");
			
			// Send
			echo $email . '\n' . $message;

			mail('apply@inspiraspanishtutoring.com', $name, $message);
			
?>