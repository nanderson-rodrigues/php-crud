<?php

require_once("db.php");
require_once("component.php");

$con = createDB();

// create button - click
if (isset($_POST['create'])) {
	createData();
}
// read button - click
if (isset($_POST['read'])) {
	getData();
}
// Update button 0 click
if (isset($_POST['update'])) {
	updateData();
}


// Create
function createData() {
	$book_name = textboxValue("book_name");
	$book_publisher = textboxValue("book_publisher");
	$book_price = textboxValue("book_price");

	if ( $book_name && $book_publisher && $book_price) {

		$sql = "
			INSERT INTO books( book_name, book_publisher, book_price )
			VALUES ('$book_name', '$book_publisher', '$book_price')
		";

		if (mysqli_query($GLOBALS['con'], $sql)) {
			textMessage("success", "Successfully inserted!!!");
		}else {
			textMessage("error", "Error!");
		}

	}else {
		textMessage("error", "Preecha o formulário!");
	}
}

// Read
function getData(){

	$sql = "SELECT * FROM books";

	$result = mysqli_query($GLOBALS['con'], $sql);

	if (mysqli_num_rows($result) > 0) {
		return $result;
	}
}

//Update
// processo parecido com a funcao de criar
function updateData() {
	// aqui poderia usar $_POST["book_id"] direto, mas a funcao texboxValue possui medidas de segurança
	$book_id = textboxValue("book_id"); 
	$book_name = textboxValue("book_name");
	$book_publisher = textboxValue("book_publisher");
	$book_price = textboxValue("book_price"); 

	if ($book_name && $book_publisher && $book_price) {

		$sql = "UPDATE books SET book_name='$book_name', book_publisher='$book_publisher', book_price='$book_price' WHERE id='$book_id';
		";

		if (mysqli_query($GLOBALS['con'], $sql)) {
			textMessage("success", "Data Successfully Updated!!!");
		}else {
			textMessage("error", "Enable to Update Data!!!");
		}

	}else {
		textMessage("error", "Select Data Using Edit Icon");
	}
}


function textboxValue($value) {
	//trim() -> security for sql injection
	$textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value])); 
	if (empty($textbox)) {
		return false;
	}
	else {
		return $textbox;
	}
}

//Messages
function textMessage($classname, $msg) {
	$element = 	"<h6 class='$classname'>$msg</h6>";
	echo $element;
}