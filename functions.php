<?php 
	
function view($path, $data=NULL)
{
	if ($data) {
		# code...
		extract($data);
	}

	$path = $path . '.view.php';
	include "view/layout.php";
	
}


 ?>