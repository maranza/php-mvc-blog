<?php 
	//require
	require'config/config.php';

	//getting the post with method from functions file
	$post = get_by_id((int)$_GET['id'], $conn);

	//if results successfull filter and display on single.view.php
	if ($post) 
	{
		# code...
			// $post = $post[0]; //not sure if i need this line though
			//filter through and display on the page.
			view('single', array(		//enter the page you want to view/load and update data.
				'post' => $post,
				'company'=>'Maranza'
				));
	} 
	else 
	{
		# code...
			header('location:index.php');
	}

	/*$post = query(
					'SELECT * FROM posts WHERE id= :id LIMIT 1', 
					array('id'=>$_GET['id']),
					$conn);
		print_r($posts);

		filter through and display on the page.
		include 'view/single.view.php';
	*/


 ?>