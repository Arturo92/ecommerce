<?php include("inc/header.php"); ?>
<?php include("inc/toolbar.php"); ?>
<br/>
<?php include("scripts/images.php"); ?>
<?php include("inc/dropdownmenu.php"); ?>
<div id="listview">
	<div id="listview-holder">
		<div id="view-holder">
		<div id="view-switcher">
			<a class="views-switcher" href="listview.php">List View</a>
			<a class="views-switcher" href="gridview.php">Grid View</a>
			<div id="filter-id">Filter by</div>
			<?php include("inc/filters.php"); ?>
		</div>
		<div id='hide-list-view'>
		<?php
           for($i = 0; $i < count($pumps); $i++){ 
                echo "<img id='pumps' src='static/$pumps[$i]' " . " height='auto' width='auto' >"; 
                echo "<p id='pumps-name'>$pumps_name[$i]</p>";
                echo "<p id='price'>$pumps_price[$i]</p>";
    }
 ?>
 	</div>
	</div>
</div>
<?php include("scripts/filtersmenu.php"); ?>
<div id="filter-list-view">
    <?php for($i = 0; $i < count($filteredDivs); $i++) { echo $filteredDivs[$i]; } ?>
</div>

<?php include("inc/footer.php"); ?>