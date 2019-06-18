<?php include("scripts/images.php"); ?>
<div id="gridview">
	<div id="gridview-holder">
		<div id="view-holder">
		<div id="view-switcher">
			<a class="views-switcher" href="listview.php">List View</a>
			<a class="views-switcher" href="gridview.php">Grid View</a>
		</div>
		<?php
           for($i = 0; $i < count($pumps); $i++){ 
                echo "<img id='pumps-gv' src='static/$pumps[$i]' " . " height='auto' width='auto' >"; 
                echo "<p id='pumps-name-gv'>$pumps_name[$i]</p>";
                echo "<p id='price-gv'>$pumps_price[$i]</p>";
    }
 ?>
	</div>
</div>