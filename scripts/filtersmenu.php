<?php
    include("images.php");
    $result = array();
    $filteredDivs = array();
    $black_shoes = array();
    $white_shoes = array();
    
    if(isset($_POST["filterSubmit"])){
    	if(isset($_POST['black'])){
        for($i = 0; $i < 4; $i++){
        array_push( $black_shoes, "pump1.jpg");
        array_push($black_shoes, "pump3.jpg");
        array_push($black_shoes, "pump12.jpg");
        array_push($filteredDivs, "<img src='static/$black_shoes[$i]' height='230px' width='120px' id='filter-pumps'>");
        echo "<script> $(document).ready(function(){ $('#hide-list-view').hide(); }); </script>";
    }
    }
    
    	if(isset($_POST['white'])){
        for($i = 0; $i < 4; $i++){
        array_push($white_shoes, "pump2.jpg");
        array_push($white_shoes, "pump5.jpg");
        array_push( $white_shoes, "pump7.jpg");
        array_push($white_shoes, "pump11.jpg");
        array_push($filteredDivs, "<img src='static/$white_shoes[$i]' height='230px' width='120px' id='filter-pumps'>");
        echo "<script> $(document).ready(function(){ $('#hide-list-view').hide(); }); </script>";
    }
    }
    
    	if(isset($_POST['red'])){
        for($i = 0; $i < 1;$i++){
        array_push($white_shoes, "pump9.jpg");
        array_push($filteredDivs, "<img src='static/$white_shoes[$i]' height='230px' width='120px' id='filter-pumps'>");
        echo "<script> $(document).ready(function(){ $('#hide-list-view').hide(); }); </script>";
    }
    }
    }
?>