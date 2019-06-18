<?php include("scripts/register.php"); ?>
<div id="navbar">
    <div id="navbar-holder">
    	<a href="index.php" id="home-icon">Home /</a>
        <form method="post" action="../scripts/search.php" id="search-form">
            <input type="text" id="search-id" name="search" placeholder="Search"/>
            <input type="submit" id="submit-search-id" name="submit-search" value=""/>
        </form>
        <div id="login-holder"><a id="login" href="login.php">Login •</a><form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?> ><input type="submit" name="logout" value="Logout •" id="logout"></form></div>
         <?php if(isset($_POST['logout'])){ session_destroy(); unset($_SESSION['username']); echo "<script> $(document).ready(function(){ $('#login').show(); $('#logout').hide(); }); </script>"; header("location: index.php"); } ?>
        <?php if(isset($_SESSION['username'])){ echo "<p style='float:right;font-size:7px;padding:2px;'>" . $_SESSION['username'] . "</p>"; echo "<script> $(document).ready(function(){ $('#logout').show(); $('#login').hide(); }); </script>"; } ?>
        <div id="menu">-Menu</div>
        <div id="exit">-Close</div>
    </div>
</div>