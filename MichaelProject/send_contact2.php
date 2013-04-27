<?php
	// Contact subject
	$subject ="$subject";
	// Details
	$message="$message";


	// Mail of sender
	$mail_from="$full_name";
	// From
	$header="from: $full_name <$e_mail>";


	// Enter your email address
	$to ='limixart@gmail.com';
	$send_contact=mail($to,$subject,$message,$header);

	// Check, if message sent to your email
	// display message "We've recived your information"
	if($send_contact){
		echo "We've recived your contact information";
		?>
			<script language="javascript">
				document.location="empForm.html";
			</script>
		<?php
	}else {
		echo "ERROR";
	}
?>