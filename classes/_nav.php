<?php
class navigation{

	public $navArray;
	function setNav($arg){
		$this->navArray = $arg;
	}

	function liA($page, $class){
		if(isset($class)){
			echo '<li class="'.$class.'"><a href="'.$this->navArray[$page]['link'].'">'.$this->navArray[$page]['name'].'</a></li>';
		}else{
			echo '<li><a href="'.$this->navArray[$page]['link'].'">'.$this->navArray[$page]['name'].'</a></li>';
		}
	}

	function __li_open($page, $class){
		if(isset($class)){
			echo  '<li><a href="'.$this->navArray[$page]['link'].'">'.$this->navArray[$page]['name'].'</a>';
			echo "<ul class='sub-nav ".$class."'>";
		}else{
			echo  '<li><a href="'.$this->navArray[$page]['link'].'">'.$this->navArray[$page]['name'].'</a>';
			echo "<ul class='sub-nav'>";
		}
	}

	function __li_close(){
		echo "</li></ul>";
	}
}
?>