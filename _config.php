<?php
$mobileView = true;
include $_SERVER['DOCUMENT_ROOT'].'/_pages.php';
include $_SERVER['DOCUMENT_ROOT'].'/classes/_body.php';

$body = new body();
$body ->set_PageArray($pages);

?>