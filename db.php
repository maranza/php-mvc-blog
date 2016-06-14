<?php
//require!!
require 'config/init.php';



//connection function!!
function connect($config){

		try 
		{
		$conn = new PDO('mysql:host=localhost;dbname=' . $config['DB_NAME'],
						$config['DB_USERNAME'],
						$config['DB_PASSWORD']
						);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Returns error details:
		return $conn;

		} 
		catch (Exception $e) 
		{
				return false;
		}
}

//query function.
function query($query,$bindings,$conn)
{
		$stmt = $conn->prepare($query);
		$stmt->execute($bindings);
		return($stmt->rowCount()>0) ? $stmt : false;
}


// get function that returns all results.
function get($tablename, $conn, $limit = 5)
{/*if you dont all rows you can set limit by  adding extra var $limit and define it*/
	
		try 
		{
			$results = $conn->query("SELECT * FROM $tablename ORDER BY id DESC LIMIT $limit");

			return($results->rowCount()>0) ? $results : false; //return results otherwise return false
		
		} 
		catch (Exception $e) 
		{
			return false;
		}
}

//function to get one item from database.
function get_by_id($id, $conn)
{
	$query = query(
				'SELECT * FROM posts WHERE id= :id LIMIT 1', 
				array('id'=>$id),
				$conn
			);
	if( $query ) return $query->fetchAll();
}



	//outdated statements

	/*	$id= 1;//temporary
	
	try {

		$conn = new PDO('mysql:host=localhost;dbname=blog',$config['DB_USERNAME'],$config['DB_PASSWORD']);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// ANTI PATTERN
		// $results = $conn->query('SELECT * FROM posts');
		// $stmt = $conn->prepare('SELECT * FROM posts WHERE id= :id');
		// $stmt->execute(array(
		// 				'id' =>$id
		// 				));
		$stmt = $conn->prepare('SELECT * FROM posts WHERE id= :id');
		$stmt->bindParam('id',$id,PDO::PARAM_INT);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_OBJ);//comment out to avoid default
		
		while ($row = $stmt->fetch()) {
			# code...
			print_r($row);
		}

	} catch (PDOException $e) {
		echo 'ERROR: '.$e->getMessage();;
	}*/

 ?>