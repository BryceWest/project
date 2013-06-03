
      <!-- page content -->
      <div class="offset3 span6">
        <div class="well">
<?php
        if ($_POST && false == $newUser["return"]) {

       ?>
            <p><?php echo $newUser["message"];
                      ?>
            </p>
<?php }
            ?>
            <form class="form-signin" action="index.php?q=auth&a=newPush" method="post">
                <h2 class="form-signin-heading">Please type in your information</h2>
                <input type="text" name="email" class="input-block-level" placeholder="Email">
                <input type="text" name="fName" class="input-block-level" placeholder="First Name">
                <input type="text" name="lName" class="input-block-level" placeholder="Last Name">
                <input type="text" name="username" class="input-block-level" placeholder="Username">
                <input type="text" name="username2" class="input-block-level" placeholder="Retype Username">
                <input type="password" name="password" class="input-block-level" placeholder="Password">
                <input type="password" name="password2" class="input-block-level" placeholder="Retype Password">

                <button class="btn btn-large btn-primary" type="submit">Sign up</button>
            </form>
            <button class="btn"><a href="index.php?q=auth&a=login">Sign in</a></button>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->