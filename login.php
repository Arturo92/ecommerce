<?php include("inc/header.php"); ?>
<?php include("scripts/register.php"); ?>
        <h1 id="loginlogo">YSL</h1>
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
         <div class="loginform">
             <div class="loginform-holder">
                 <form method="post" action="login.php" id="loginformid">
                   <div class="form">
                     <input type="text" id="usernameid"  name="username" placeholder="Username"/>
                     <input type="password" id="passwordid" name="pword" placeholder="Passsword"/>
                   </div>
                   <input type="submit" id="submitid" value="Login" name="login_user"/>
                 </form>
                 
                 <div class="createaccount">
                     <div class="createaccount-holder">
                         <p>OR</p>
                         <a id="createaccountid" href="signup.php">Signup and register</a>
                     </div>
                 </div>
             </div>
         </div>
    </div>
  </body>
</html>