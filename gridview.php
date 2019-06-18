<?php include("inc/header.php"); ?>
<?php include("inc/toolbar.php"); ?>
<br/>
<?php include("scripts/images.php"); ?>
<?php include("inc/dropdownmenu.php"); ?>
<div id="gridview">
	<div id="gridview-holder">
		<div id="view-holder">
		<div id="view-switcher">
			<a class="views-switcher" href="listview.php">List View</a>
			<a class="views-switcher" href="gridview.php">Grid View</a>
			<div id="filter-id">Filter by</div>
		</div>
		<?php
           for($i = 0; $i < count($pumps); $i++){
                echo "<img id='pumps-gv' src='static/$pumps[$i]' " . " height='auto' width='auto' >"; 
    }
 ?>
	</div>
</div>

<?php include("inc/footer.php"); ?>