<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$con = mysqli_connect('localhost', 'root', '');

	$create = "CREATE DATABASE IF NOT EXISTS library";
	mysqli_query($con, $create);

    $use = "USE library";
	mysqli_query($con, $use);
	
	$tbuser = "CREATE TABLE IF NOT EXISTS tableusers (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		password VARCHAR(50)
		)";
		mysqli_query($con, $tbuser);

	$tbbooks = "CREATE TABLE IF NOT EXISTS tablebooks (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		title VARCHAR(50) NOT NULL,
		author VARCHAR(100) NOT NULL,
		edition INT(10),
		adddate DATE
		)";
		mysqli_query($con, $tbbooks);

	$ins = "INSERT INTO `tablebooks` (`id`, `title`, `author`, `edition`, `adddate`) VALUES
	(1, 'Wrong key then', 'Debuzzy skar', 1, '2020-08-11'),
	(2, 'Guns akimbo', 'collino antony', 2, '2020-08-11'),
	(3, 'Bob Marley', 'Ganja planter q', 1, '2020-08-11'),
	(4, 'Steven Mohock', 'Antony grey', 2, '2020-08-11'),
	(5, 'Stroy of that guy', 'Steven Mohock', 1, '2020-08-11'),
	(6, 'Blackkan Man Turn', 'Picasco italio', 2, '2020-08-11'),
	(7, 'White Orange me', 'Donald hashhole', 1, '2020-08-11'),
	(8, 'Blackkan Man Turn', 'collino antony', 2, '2020-08-11'),
	(9, 'The Avenger marvel', 'roy cater troy', 3, '2020-08-11')";
	mysqli_query($con, $ins);


	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pass1 = mysqli_real_escape_string($con, $_POST['password_1']);
		$pass2 = mysqli_real_escape_string($con, $_POST['password_2']);

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($pass1)) { array_push($errors, "Password is required"); }

		if ($pass1 != $pass2) {
			array_push($errors, "passwords do not match");
		}

		if (count($errors) == 0) {
			$password = md5($pass1);
			$query = "INSERT INTO tableusers (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($con, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Welcome";
			setcookie('user', $username, time() + (86400 * 1), "/");
			header('location: index.php');
		}

	}


	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email required");
		}
		if (empty($password)) {
			array_push($errors, "Password required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM tableusers WHERE email='$email' AND password='$password'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are logged in";
				setcookie('user', $username, time() + (86400 * 1), "/");
				header('location: index.php');
			}else {
				array_push($errors, "Incorrect combination");
			}
		}
	}

	if (isset($_POST['addbook'])) {
		$title = mysqli_real_escape_string($con, $_POST['title']);
		$author = mysqli_real_escape_string($con, $_POST['author']);
		$edition = mysqli_real_escape_string($con, $_POST['edition']);

		if (empty($title)) {
			array_push($errors, "Title required");
		}
		if (empty($author)) {
			array_push($errors, "Author required");
		}
		if (empty($edition)) {
			array_push($errors, "Edition required");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO tablebooks (title, author, edition, adddate ) 
					  VALUES('$title','$author', '$edition', NOW())";
			mysqli_query($con, $query);

			$_SESSION['added'] = "added successfuly";
			header('location: allbooks.php');
		}
	}

	$querrybooks = "SELECT * FROM tablebooks";
	$result = $con->query($querrybooks);
	if ($result->num_rows > 0) {
	  
	} else {
	    echo "No books";
	}


		if (isset($_POST['editbook'])) {
			$oldauthor = mysqli_real_escape_string($con, $_POST['author']);
			$newauthor = mysqli_real_escape_string($con, $_POST['new']);
			$id = mysqli_real_escape_string($con, $_POST['id']);
	
			if (empty($id)) { array_push($errors, "ID required"); }
	
			if (empty($oldauthor)) { array_push($errors, "Old Author required!"); }
			
			if (empty($newauthor)) { array_push($errors, "Author required!"); }
			
	
			if (count($errors) == 0) {
				$query = "UPDATE tablebooks SET author='$newauthor' WHERE id='$id'";
				mysqli_query($con, $query);
	
				header('location: allbooks.php');
			}
		
		}


		if (isset($_POST['deletebook'])) {
			$id = mysqli_real_escape_string($con, $_POST['id']);
	
			if (empty($id)) { array_push($errors, "ID required"); }
		
	
			if (count($errors) == 0) {
				$query = "DELETE FROM tablebooks WHERE id='$id'";
				mysqli_query($con, $query);
	
				header('location: allbooks.php');
			}
		
		}

?>
