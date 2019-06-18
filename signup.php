<?php include("inc/header.php"); ?>
    <div class="wrapper">
    <?php include("scripts/register.php"); ?>
        <h1 id="logo">YSL</h1>
        <div class="errorbox">
            <div class="errorbox-holder">
            <?php
                    if (count($errors) > 0) : ?>
                     <div class="error"> 	
                     <?php foreach ($errors as $error) : ?> 	
                      <p> <?php echo $error ?> </p> 	<?php endforeach ?>
                       </div>
                   </div>
               </div>
                        <?php endif ?>            
        <div class="signupform">
            <div class="signupform-holder">
                <form method="post" action="signup.php" id="signupformid">
                <div class="form">
                    <input type="text" id="fnameid" name="fname"  placeholder="First name"/>
                    <input type="text" id="lnameid" name="lname"  placeholder="Last name"/>
                  <input type="email" id="emailid" name="email"  placeholder="Email"/>
                  <input type="text" id="usernameid" placeholder="User name" name="username"/>
                  <input type="password" name="pword" placeholder="Password" id="pwordid"/>
                  </div>
                  <input type="submit" value="Register account" name="reg_user" id="registerid"/>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>