<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php include 'components/navigation/navigation.php' ?>

<?php
  

  if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET['page'];
    include("pages/$page");
  }else{
    include('pages/home.php');
  }

  // if (!empty($page)) {
	// 	include($page);
	// } 	/* if $page has a value, include it */
	// else {
	// 	include('index.php');
	// } 	/* otherwise, include the default page */
?>
  
</body>
</html>