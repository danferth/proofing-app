<?php
include $_SERVER['DOCUMENT_ROOT'].'/_config.php';
$body->set_page('index');
$body->head();

$database = new dbConnect();
$database->query('SELECT * FROM users');
$row = $database->resultset();

echo $row[0]['name'].' | '.$row[0]['type'];

?>

<h1>this works</h1>
<p>you are on the home page</p>


<?php $body->foot(); ?>