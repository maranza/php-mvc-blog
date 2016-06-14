<?php 
	// require'../config.php';
	require'../db.php';
	require '../functions.php';
	$conn = connect($config);
	if (!$conn) die("no connection.");

	$data = array();

	if ($_SERVER['REQUEST_METHOD']==='POST') {
		# code...
		$title = $_POST['title'];
		$post = $_POST['post'];
		$author = $_POST['author'];

		if (empty($title) || empty($post) || empty($author)) {
			# code...
			$data['status'] = 'Please fill in all inputs.';
		}else{
			//create a new row in the table
			$request=query('INSERT INTO posts(title, post, author) VALUES(:title, :post, :author)', array('title'=>$title,'post'=>$post,'author'=>$author),$conn);
			if ($request) {
				# code...
				$data['status'] = 'Your post has been added.';
			}else{
				$data['status'] = 'something went wrong';
			}
			
		}
	}
	view('../admin/create',$data);
 ?>