<?php include("crawl/crawl.php"); ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Saint Laurent</title>
	<meta name="theme-color" content="black"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        for($i = 0; $i < count($style_sheets); $i++){
        echo "<link rel='stylesheet' type='text/css' href='../static/css/" . $style_sheets[$i] . "' >";
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="static/js/menu.js"></script>
    <script src="static/js/filtermenu.js"></script>
    </head>
    <body>
    	<div class="wrapper">