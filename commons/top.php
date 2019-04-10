<?php
    //require_once __DIR__ . '/../vendor/autoload.php';
?>

<!doctype html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<style>
			.card-img {
				width: 100%;
				height: 100%;
				cursor: pointer;
			}
			.navbar-nav {
				width: 80%;
				margin: 0 auto;
			}
			.container {
				padding: 1% 0;
			}
			#cards-row, #cards-remaining-row, #cards-left-row {
				text-align: center;
			}
			/*.table td, .table th{
				text-align: center;
    			vertical-align: middle;
			}
			.table {
				width:100%;
			}*/
		</style>

		<title>Beat The Dealer</title>
		<!-- <script src="<?php __DIR__ ?>/commons/validate.js"></script> -->

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav">
					<a class="navbar-brand" href="#">Beat The Dealer</a>
					<!--<a class="nav-item nav-link" href="/beatit">Beat It</a>-->
				</div>
			</div>
		</nav>
		<div class="container">