<?php include("scripts/images.php"); ?>
<div id="listview">
	<div id="listview-holder">
		<?php
           for($i = 0; $i < count($pumps); $i++){ 
                echo "<img id='pumps' src='static/$pumps[$i]' " . " height='auto' width='auto' >"; 
                echo "<p id='pumps-name'>$pumps_name[$i]</p>";
                echo "<p id='price'>$pumps_price[$i]</p>";
    }
 ?>
	</div>
</div>