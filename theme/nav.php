<nav>
<ul class="nav">
	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/_pages.php';
	include $_SERVER['DOCUMENT_ROOT'].'/classes/_nav.php';

	$nav = new navigation();
	$nav->setNav($pages);

	$nav->liA('index');
	$nav->liA('about');
	

?>
</ul>
</nav>