<?php

require_once("db.php");
require_once("component.php");

$con = createDB();

//create button - click
if (isset($_POST['create'])) {
	createData();
}

// read botton
if (isset($_POST['read'])) {
	getData();
}

// Insert
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


function getData(){

	$sql = "SELECT * FROM books";

	$result = mysqli_query($GLOBALS['con'], $sql);

	if (mysqli_num_rows($result) > 0) {
		return $result;
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