<nav>
<ul class="nav">
	<?php
	include $_SERVER['DOCUMENT_ROOT'].'/_pages.php';
	include $_SERVER['DOCUMENT_ROOT'].'/classes/_nav.php';

	$nav = new navigation();
	$nav->setNav($pages);

	$nav->liA('index');
	$nav->liA('about');
	$nav->liA('contact');
		$nav->__li_open('products');
		$nav->liA('backpacks');
			$nav->__li_open('shoes');
			$nav->liA('hiking');
				$nav->__li_open('running');
				$nav->liA('dirt');
				$nav->liA('crosstraining');
				$nav->liA('marrathon');
				$nav->__li_close();
			$nav->liA('sandles');
			$nav->__li_close();
		$nav->__li_close();

?>
</ul>
</nav>