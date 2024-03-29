<?php
function menu($url,$compara){
	if(stripos($compara, $url) !==false)
		return "active";
	else
		return null;

}
?>