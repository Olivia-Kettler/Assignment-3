<?php

//include('data.php');
	$stock=file_get_contents('data.json');
	$flowers=json_decode($stock,true);
if(!isset($_GET['id'])){
	echo 'Please enter the id or visit the <a href="index.php">index page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($flowers)-1){
	echo 'Please enter the id or visit the <a href="index.php">index page</a>.';
	die();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $flowers[$_GET['id']]['name']?></title>
	<style>
		body {background-color: #ffdd99;}
		h1 {color: #ffffff;}
	</style>
	
  </head>
  <body>
 
	  <div class="container">
		<h1><?= $flowers[$_GET['id']]['name'].' '.$flowers[$_GET['id']]['season']?></h1>
		<h3><?= $flowers[$_GET['id']]['color'].' '.$flowers[$_GET['id']]['price']?></h3>
		<p><?= $flowers[$_GET['id']]['bio'] ?></p>
		<img src="<?= $flowers[$_GET['id']]['picture'] ?>" width="400" />
		<br><br><br>
		<!--WIP
		<button type="button" class="btn btn-primary btn-lg">Add to Cart</button> -->
		 <a href="index.php" class="btn btn-primary btn-lg btn-block" tabindex="-1" role="button" aria-disabled="true">Home</a>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>