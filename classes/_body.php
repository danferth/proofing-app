<?php 

class body{

	private $pageArray;
	private $page;
	private $currentPage;

	function set_pageArray($var){
		$this->pageArray = $var;
	}
	function set_page($var){
		$this->page = $var;
		$this->currentPage = $this->pageArray[$this->page];
	}

	function head(){

		if($this->currentPage['sessions'] == true){
			include $_SERVER['DOCUMENT_ROOT'].'/classes/_sessions.php';
		}else{ echo "<!-- no sessions -->"; }
		
		if($this->currentPage['db'] == true){
			include $_SERVER['DOCUMENT_ROOT'].'/classes/_dbConnect.php';
	
			define("DB_HOST", "localhost");
			define("DB_USER", "root");
			define("DB_PASS", "");
			define("DB_NAME", "test");
	
		}else{ echo "<!-- no db connect -->"; }
	
		include $_SERVER['DOCUMENT_ROOT'].'/theme/head.php';
	}

	function foot(){
		include $_SERVER['DOCUMENT_ROOT'].'/theme/foot.php';
	}

}//end class

?>