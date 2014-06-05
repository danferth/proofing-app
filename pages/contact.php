<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
$body->set_page('contact');
$body->head();
?>

<h1>Contact Us</h1>
<p>are you on the Contact page?</p>


<form action="">
	<input type="text" name="text">
	<input type="submit" value="submit">

</form>

<?php $body->foot(); ?>


