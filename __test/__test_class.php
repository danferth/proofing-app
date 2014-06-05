<?php

class fizzBuzz{

	function __construct(){

		echo '<div style=\'width:300px; padding:5px 7px; margin:3px; border:1px dashed #666; font:normal 10px/18px sans-serif; background:#fff; color:#999;\'>';
		for ($i=1; $i <= 100; $i++) { 
			if (($i%3 === 0) && ($i%5 === 0)){
				echo '<b>fizzBuzz</b> ';
			}elseif ($i%3 === 0) {
				echo '<i>fizz</i> ';
			}elseif ($i%5 === 0){
				echo '<i>buzz</i> ';
			}else{
				echo $i.' ';
			}
		}//end for
		echo '</div>';
	}//end __construct
}//end fizzBuzz




?>