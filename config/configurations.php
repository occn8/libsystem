<?php
session_start();

$username = "";
$email    = "";
$fname    = "";
$lname    = "";
$pass1    = "";
$pass2    = "";
$address    = "";
$zip    = "";
$errors = array();

$connect = mysqli_connect('localhost', 'root', '');

$createDB = "CREATE DATABASE IF NOT EXISTS libsystem";
mysqli_query($connect, $createDB);

$useDB = "USE libsystem";
mysqli_query($connect, $useDB);


$users = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    regdate datetime NOT NULL,
	modified datetime NOT NULL,	
    address VARCHAR(20) NOT NULL,
    country VARCHAR(20),
    district VARCHAR(20),
    zip VARCHAR(10),
    password VARCHAR(50)
		)";
mysqli_query($connect, $users);

$books = "CREATE TABLE IF NOT EXISTS books (
		book_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        book_name VARCHAR (25) NOT NULL,
		book_type VARCHAR (25) NOT NULL,
		book_brand VARCHAR (25) NOT NULL,
        book_author VARCHAR (25) NOT NULL,
 		modified datetime NOT NULL,	
        book_image VARCHAR (100)
		)";
mysqli_query($connect, $books);

$msgs = "CREATE TABLE IF NOT EXISTS messages (
	msg_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	usr_name VARCHAR (25) NOT NULL,
	usr_email VARCHAR (25) NOT NULL,
	usr_country VARCHAR (25) NOT NULL,
	usr_msg VARCHAR (255) NOT NULL,
	modified datetime NOT NULL
	)";
mysqli_query($connect, $msgs);

$readlist = "CREATE TABLE IF NOT EXISTS readlist (
	readlist_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	book_id int(11) NOT NULL,
	book_qty int(11) NOT NULL
	)";
mysqli_query($connect, $readlist);


$admincreate = "INSERT INTO users (id,fname, lname, username, email, regdate,modified, address, country, district, zip, password) 
VALUES(1,'martyr','lead', 'admin', 'admin@a.a', NOW(),NOW(), '11th st', 'Uganda', 'Kampala', '00000', '21232f297a57a5a743894a0e4a801fc3')";
mysqli_query($connect, $admincreate);

$books1 = "INSERT INTO `books` (book_id, book_name,book_type, book_brand, book_author, modified, book_image)
	VALUES (1,'My life again', 'primary','phenix','Ben Carson',NOW(),'/libsystem/assets/books/short2.jpg'),
	(2,'Things mater', 'highschool','brooks','berney stinson',NOW(),'/libsystem/assets/books/school1.jpg'),
	(3,'stranger things', 'classics','printx','mark stinson','2021-02-05 13:23:05','/libsystem/assets/books/classics1.jpg'),
	(4,'second man', 'university','ukheads','Timmy Grag',NOW(),'/libsystem/assets/books/book6.jpg'),
	(5,'what they said', 'stories','feathink','tom stinson',NOW(),'/libsystem/assets/books/short1.jpg'),
	(6,'men are men', 'action','phenix','berney Macgragth','2021-02-05 13:23:05','/libsystem/assets/books/short3.jpg'),
	(7,'engineering basics', 'highschool','feathink','Jimmy stinson','2021-02-05 13:23:05','/libsystem/assets/books/school2.jpg'),
	(8,'making most of education', 'stories','ukheads','Jannet linda',NOW(),'/libsystem/assets/books/short3.jpg'),
	(9,'Friends here', 'fantasy','inkfest','Kenneth stinson','2021-02-05 13:23:05','/libsystem/assets/books/classics1.jpg'),
	(10,'them said that', 'fiction','ukheads','berney Job',NOW(),'/libsystem/assets/books/book6.jpg'),
	(11,'another book yet', 'fantasy','feathink','Bill stinson','2021-02-05 13:23:05','/libsystem/assets/books/school2.jpg'),
	(12,'you things', 'classics','infest','mark stinson','2021-02-05 13:23:05','/libsystem/assets/books/classics2.jpg'),
	(13,'History of something', 'highschool','ukheads','Jannet linda',NOW(),'/libsystem/assets/books/school2.jpg'),
	(14,'university basics', 'university','ukheads','Jannet linda',NOW(),'/libsystem/assets/books/classics3.jpg'),
	(15,'most of education', 'stories','ukheads','Jannet linda',NOW(),'/libsystem/assets/books/short2.jpg'),
	(16,'Duty things', 'classics','ukheads','nikas linda',NOW(),'/libsystem/assets/books/classics3.jpg'),
	(17,'Act one', 'action','phenix','T Macgragth','2021-02-05 13:23:05','/libsystem/assets/books/school1.jpg')";
mysqli_query($connect, $books1);


if (isset($_POST['register_user'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$address = mysqli_real_escape_string($connect, $_POST['address']);
	$country = mysqli_real_escape_string($connect, $_POST['country']);
	$district = mysqli_real_escape_string($connect, $_POST['district']);
	$zip = mysqli_real_escape_string($connect, $_POST['zip']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
	$if_user_exist = "SELECT * FROM users WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);
	$if_email_exist = "SELECT * FROM users WHERE email='$email'";
	$if_email_result = mysqli_query($connect, $if_email_exist);

	if (empty($fname)) {
		array_push($errors, "First name is required!");
	} else {
		if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
			array_push($errors, "Invalid First name!");
		}
	}
	if (empty($lname)) {
		array_push($errors, "Last name is required!");
	}
	if (empty($username)) {
		array_push($errors, "Username is required!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already taken!");
	}
	if (mysqli_num_rows($if_email_result) > 0) {
		array_push($errors, "Sorry.. Email is already in Use!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (empty($pass1)) {
		array_push($errors, "Password is required!");
	}
	if (!preg_match("/[0-9]{4,5}$/", $zip)) {
		array_push($errors, "Invalid Zip code!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Passwords do not match!");
	}

	if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "INSERT INTO users (fname, lname, username, email, regdate,modified, address, country, district, zip, password) 
					  VALUES('$fname','$lname', '$username', '$email', NOW(),NOW(), '$address', '$country', '$district', '$zip', '$password')";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = mysqli_insert_id($connect);
		setcookie('user', $username, time() + (86400 * 2), "/");
		if ($_SESSION['pagefrom'] == "readlist") {
			header('location: readlist.php');
		} else {
			header('location: index.php');
		}
	}
}


if (isset($_POST['signin_user'])) {
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Email Required");
	}
	if (empty($password)) {
		array_push($errors, "Password Required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connect, $query);
		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_assoc($results);
			$username = $row['username'];
			$uid = $row['id'];

			$_SESSION['username'] = $username;
			$_SESSION['id'] = $uid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			if ($_SESSION['pagefrom'] == "readlist") {
				header('location: readlist.php');
			} else {
				header('location: index.php');
			}
		} else {
			array_push($errors, "Incorrect combination");
		}
	}
}

if (isset($_POST['save_details'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$address = mysqli_real_escape_string($connect, $_POST['address']);
	$country = mysqli_real_escape_string($connect, $_POST['country']);
	$district = mysqli_real_escape_string($connect, $_POST['district']);
	$zip = mysqli_real_escape_string($connect, $_POST['zip']);

	if (empty($fname)) {
		array_push($errors, "First name is required!");
	} else {
		if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
			array_push($errors, "Invalid First name!");
		}
	}
	if (empty($lname)) {
		array_push($errors, "Last name is required!");
	}
	if (empty($email)) {
		array_push($errors, "Email is required!");
	}
	if (!preg_match("/[0-9]{4,5}$/", $zip)) {
		array_push($errors, "Invalid Zip code!");
	}
	$uid = $_SESSION['id'];
	if (count($errors) == 0) {
		$query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',modified=NOW(),address='$address',country='$country',district='$district',zip='$zip' WHERE id='$uid'";

		mysqli_query($connect, $query);

		header('location: account.php');
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	header("location: index.php");
}

if (isset($_POST['add'])) {
	if (isset($_SESSION['readlist'])) {

		$item_array_id = array_column($_SESSION['readlist'], "book_id");
		$uid = $_SESSION['id'];

		if (in_array($_POST['book_id'], $item_array_id)) {
			echo "<script>alert('Book is already added in the readlist..!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		} else {

			$count = count($_SESSION['readlist']);

			$item_array = array(
				'userid' => $uid,
				'book_id' => $_POST['book_id'],
				'book_qty' => 1
			);

			if ($item_array != null) {
				$columns = implode(',', array_keys($item_array));
				$values = implode(',', array_values($item_array));
				$insert_readlist = sprintf("INSERT INTO %s(%s) VALUES(%s)", 'readlist', $columns, $values);
				$result = $connect->query($insert_readlist);
			}

			$_SESSION['readlist'][$count] = $item_array;
			header('location: readlist.php');
		}
	} else {

		$item_array = array(
			'userid' => $uid,
			'book_id' => $_POST['book_id'],
			'book_qty' => 1
		);
		$_SESSION['readlist'][0] = $item_array;
		header('location: readlist.php');
	}
}


if (isset($_POST['send_msg'])) {
	$usr_name = mysqli_real_escape_string($connect, $_POST['usr_name']);
	$usr_email = mysqli_real_escape_string($connect, $_POST['usr_email']);
	$usr_country = mysqli_real_escape_string($connect, $_POST['usr_country']);
	$usr_msg = mysqli_real_escape_string($connect, $_POST['usr_msg']);
	if (empty($usr_name)) {
		array_push($errors, "Username Required");
	}
	if (empty($usr_email)) {
		array_push($errors, "Email Required");
	}

	if (count($errors) == 0) {
		$uid = $_SESSION['id'];
		$query = "INSERT INTO messages (usr_name, usr_email, usr_country, usr_msg, modified) 
					  VALUES('$usr_name', '$usr_email', '$usr_country', '$usr_msg', NOW())";
		mysqli_query($connect, $query);

		header('location: contact.php');
	}
}

$querrybooks = "SELECT * FROM books";
$querryhighschool = "SELECT * FROM books WHERE book_type='highschool'";
$querryclassics = "SELECT * FROM books WHERE book_type='classics'";
$querrystories = "SELECT * FROM books WHERE book_type='stories'";
$querryaction = "SELECT * FROM books WHERE book_type='action'";
$querrylatest = "SELECT * FROM books WHERE modified='2021-02-05 13:23:05'";
$querryusers = "SELECT * FROM users";
$querrymessages = "SELECT * FROM messages";
$querryreadlist = "SELECT * FROM readlist";

$result = $connect->query($querrybooks);
if ($result->num_rows > 0) {
} else {
}
$userresult = $connect->query($querryusers);
if ($result->num_rows > 0) {
} else {
}
$messagesresult = $connect->query($querrymessages);
if ($result->num_rows > 0) {
} else {
}
$readlistresult = $connect->query($querryreadlist);
if ($result->num_rows > 0) {
} else {
}

if (isset($_POST['delete_product'])) {
	$id = mysqli_real_escape_string($connect, $_POST['pid']);
	if (empty($id)) {
		array_push($errors, "Product ID required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM books WHERE book_id='$id'";
		mysqli_query($connect, $query);
		header('location: admin.php');
	}
}

if (isset($_POST['delete_user'])) {
	$id = mysqli_real_escape_string($connect, $_POST['uid']);
	if (empty($id)) {
		array_push($errors, "User ID required");
	}
	if (count($errors) == 0) {
		$query = "DELETE FROM users WHERE id='$id'";
		mysqli_query($connect, $query);
		header('location: admin.php');
	}
}

if (isset($_POST['add_product'])) {
	$pdtname = mysqli_real_escape_string($connect, $_POST['pdtname']);
	$pdttype = mysqli_real_escape_string($connect, $_POST['pdttype']);
	$pdtbrand = mysqli_real_escape_string($connect, $_POST['pdtbrand']);
	$pdtprice = mysqli_real_escape_string($connect, $_POST['pdtprice']);
	$pdtimg = mysqli_real_escape_string($connect, $_POST['pdtimg']);

	if (empty($pdtname)) {
		array_push($errors, "Name required");
	}
	if (empty($pdttype)) {
		array_push($errors, "Type Required");
	}
	if (empty($pdtbrand)) {
		array_push($errors, "Brand Required");
	}
	if (empty($pdtprice)) {
		array_push($errors, "Auther Required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO books (book_name,book_type, book_brand, book_author, modified, book_image) 
					  VALUES('$pdtname', '$pdttype','$pdtbrand','$pdtprice',NOW(),'$pdtimg')";
		mysqli_query($connect, $query);
		header('location: admin.php');
	}
}
