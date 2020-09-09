<?php

require_once("db.php");
require_once("component.php");

$con = createDB();

//create button - click
if (isset($_POST['create'])) {
	createData();
}

