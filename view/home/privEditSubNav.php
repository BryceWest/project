
      <!-- sub navigation -->

      <div class="span3">
        <div class="navbar offset4">
     <div class="navbar-inner">
        <div class="nav-collapse collapse">


            <ul class="nav pull-right">

                <ul role="menu" aria-labelledby="drop3">
<?php
        foreach ( $privacy as $key => $item ) { ?>
        <form action="index.php?q=home&a=privPush" method="post">
                    <li role="presentation"><?php print $item["privacy1"]; ?></a><input name="priv1" type="text" value="<?php print $item["privacy1"]; ?>"></li>
                    <li role="presentation"><?php print $item["privacy2"]; ?></a><input name="priv2" type="text" value="<?php print $item["privacy2"]; ?>"></li>
                    <li role="presentation"><?php print $item["privacy3"]; ?></a><input name="priv3" type="text" value="<?php print $item["privacy3"]; ?>"></li>
                    <li role="presentation"><?php print $item["privacy4"]; ?></a><input name="priv4" type="text" value="<?php print $item["privacy4"]; ?>"></li>
                    <li role="presentation"><?php print $item["privacy5"]; ?></a><input name="priv5" type="text" value="<?php print $item["privacy5"]; ?>"></li>
                    <button class="btn btn-large btn-primary" type="submit">Update</button>
        </form>
<?php   }
?>





                </ul>
              </li>
            </ul>
        </div>
      </div>
    </div><!--/.well -->

        <div class="well">





            <dl>
                <dt><img class="span12" src="<?php print "pics/".$about["name"] ?>" /></dt>
                <dt>About</dt>
                <dd><?php print $about["about"]; ?></dd><br />
                <dt>Birth day</dt>
                <dd><?php print $about["birth_month"]."/".$about["birth_day"]."/".$about["birth_year"]; ?></dd>
            </dl>
            <a class="btn" href="index.php?q=home&a=proEdit">Edit Info</a>
        </div><!--/well-->





      </div><!--/span-->
      <!-- end sub navigation -->

