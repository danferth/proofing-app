<?php include $_SERVER['DOCUMENT_ROOT'].'/__test/__test_class.php';include $_SERVER['DOCUMENT_ROOT'].'/__test_data.php'; ?> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>$(document).ready(function(){
	//$('.topper').hide();
	//$('.topper').slideDown(600);
	//EXTRA JS HERE 
	console.log('lets do this');
});</script><style>*{box-sizing:border-box;}html, body{width:100%;height:100%;margin:0;padding:0;}.topper{background:#fffee0;width:100%;height:130px;padding:5px 10px 10px 25px;box-shadow:inset 0 -3px 3px #5b5800;}.info{background:#fff;width:400px;padding:8px;border:1px dashed #666;}p{color:#555;margin:0 0 5px 20px;font:bold 12px sans-serif;}ul{margin:5px 0;}li{color:#666;font:normal 11px sans-serif;margin-bottom:4px;}</style><div class="topper"><div class="info"><p>You sir, are on a test page!</p><ul><li><i>__test_class.php</i> is included, and holds the class we are testing</li><li><i>__test_data.php</i> in included second, and contains any data the class may need (see array)</li><li>jQuery is also added <i>(Google CDN)</i> for any interactivity with a document ready already in place</li></ul></div></div>

<!-- READY FOR SOME TESTING -->
