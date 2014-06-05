<?php 
include $_SERVER['DOCUMENT_ROOT'].'/classes/_form.php';
//set variables
$form = new form();
$form -> set_form_action('thanks.php');
$form -> set_form_method('POST');
$form -> set_form_ID('form_ID');
$msg = <<<EOD
	<p class=\"error\">Our apologies, this form requires JavaScript enabled to submit, please enable JavaScript in your browser and reload the page for it to work properly.</p>
EOD;
$form -> set_error_msg($msg);
//easier to put into $msg variable first.

$form -> jsCheck();		//sets jsCheck
$form -> jsError();		//sets jsError
$form -> start_form();	//starts form
?>

<!-- inputs and such will be hand coded -->
<p><input type="text" name="fname" placeholder="your name"></p>
<p><input type="email" name="email"></p>
<input type="submit" value="submit">
</form>

<!-- END OF FORM PAGE SET UP -->
<!-- ............................................ -->

<?php
//PROCESS FORM
include $_SERVER['DOCUMENT_ROOT'].'/classes/_form.php';
$parse = new process_form();
//set variables for form processing
$parse -> set_form_page('form_base.php');
$parse -> set_next_page('thanks.php');
//set variables from input names
$parse -> set_mail_user_name('fname');
$parse -> set_mail_user_email('email');
//set variables for sending mail
$parse -> set_mail_to('danferth@gmail.com');
$parse -> set_mail_cc('someone@example.com');
$parse -> set_mail_bcc('someone-else@example.com');
$parse -> set_mail_subject('message from the website');

//body of email
$body  = sprintf("<html>"); 
$body .= sprintf("<body>");
$body .= sprintf("<h2>Title for recieved email:</h2>\n");
$body .= sprintf("<p>you recieved an email from %s </p>\n",$parse->get_mail_user_name());
$body .= sprintf("<p>their email address is %s</p>\n",$parse->get_mail_user_email());
$body .= sprintf("<br /><hr />");
$body .= sprintf("For internal use:<br />\n");
$body .= sprintf("<br />-----------------<br />\n");
$body .= sprintf("\nSender's IP: %s<br />\n", $_SERVER['REMOTE_ADDR']);
$body .= sprintf("\nReceived: %s<br />\n",date("Y-m-d H:i:s"));
$body .= sprintf("</body>");
$body .= sprintf("</html>");

//add body of email to object
$parse -> set_mail_body($body);

//send mail
$parse -> mail_send();




?>

