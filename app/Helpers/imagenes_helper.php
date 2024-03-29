<?php
function imagen($nombre){
	if(file_exists('public/images/thumbs/'.$nombre) == FALSE || $nombre== null){
		$ruta = base_url('public/images/no-image.png');
	}else{
		$ruta = base_url().'public/images/thumbs/'.$nombre;
	}

	$etiqueta='<img src="'.$ruta.'" class="img-thumbnail">';
		return $etiqueta;
}

?>