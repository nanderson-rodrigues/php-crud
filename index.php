<?php
	require_once("../php-crud/php/component.php");
	require_once("../php-crud/php/operation.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>PHP CRUD - BOOKS</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<main>
	
	<div class="container text-center">
		<h1 class="py-4"><i class="large material-icons">book</i> Book Store</h1>

		<div class="d-flex justify-content-center">

			<form action="" method="post" accept-charset="utf-8">

				<!-- php/component.php -->
				<div class="pt-2">
					<?php 
						inputElement(
							"<i class='large material-icons'>library_books</i>", 
							"Id",
							"id",
							"",
							"bg-light"
						);
					?>
				</div>

				<div class="pt-2">
					<?php 
						inputElement(
							"<i class='large material-icons'>book</i>", 
							"Book Name",
							"book_name",
							"",
							"bg-light"
						);
					?>
				</div>

				<div class="row pt-2">
					<div class="col">
						<?php 
							inputElement(
								"<i class='large material-icons'>publish</i>", 
								"Publiser",
								"book_publisher",
								"",
								"bg-light"
							);
						?>
					</div>
					<div class="col">
						<?php 
							inputElement(
								"<i class='large material-icons'>attach_money</i>", 
								"Price",
								"book_price",
								"",
								"bg-light"
							);
						?>
					</div>
				</div>

				<div class="d-flex">
					<?php 
						buttonElement(
							"btn-create",
							"btn btn-success",
							"<i class='large material-icons'>library_add</i>",
							"create",
							"",
						);
					?>
					<?php 
						buttonElement(
							"btn-read",
							"btn btn-primary",
							"<i class='large material-icons'>sync</i>",
							"read",
							""
						);
					?>
					<?php 
						buttonElement(
							"btn-update",
							"btn btn-warning",
							"<i class='large material-icons'>update</i>",
							"update",
							""
						);
					?>
					<?php 
						buttonElement(
							"btn-delete",
							"btn btn-danger",
							"<i class='large material-icons'>delete</i>",
							"delete",
							""
						);
					?>
				</div>

			</form>	
		</div>

		<div class="d-flex justify-content-center table-data">
			<table class="table table-striped table-dark">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Book Name</th>
						<th>Publisher</th>
						<th>Book Price</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<tr>
						<td>1</td>
						<td>Book name</td>
						<td>Editora</td>
						<td>20.99</td>
						<td><i class='large material-icons'>edit</i></td>
					</tr>
				</tbody>

			</table>
		</div>

	</div>

	</main>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>