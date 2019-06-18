<?php
    include("file.php");
    
    $db = mysqli_connect('localhost', 'root', '', 'db');
    $s = array();
    $query = mysqli_real_escape_string($db, $_POST['search']); 
    
$min_length = 2;

    if(isset($_POST['searchSubmit'])){
        if(strlen($query) > $min_length){
            
            $query = htmlspecialchars($query); 
            
            $query = mysqli_real_escape_string($db, $query);
                
                for($i = 0; $i < 1; $i++){
                    
                    $raw_results = mysqli_query($db, "SELECT FilePath FROM userFiles ORDER BY '$query'") or die (mysqli_error);
                  if(mysqli_num_rows($raw_results) > 0){while($row = mysqli_fetch_array($raw_results)){
  array_push($s, $row['FilePath']);
                }
            }
        }
    }
    
    mysqli_close($db);
}
?>