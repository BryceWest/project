
      <!-- sub navigation -->

      <div class="span3">
        <div class="navbar offset4">
     <div class="navbar-inner">
        <div class="nav-collapse collapse">


            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown">
                <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
<?php
                    foreach ( $privacy as $key => $item ) {
                        switch ( $_GET["p"] ) {

                              case "1":
                                  print $item["privacy1"];
                                  break;

                              case "2":
                                  print $item["privacy2"];
                                  break;

                              case "3":
                                  print $item["privacy3"];
                                  break;

                              case "4":
                                  print $item["privacy4"];
                                  break;

                              case "5":
                                  print $item["privacy5"];
                                  break;

                              default:
                                  print $item["privacy1"];
                                  break;
                          }
                    }
?>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
<?php
        foreach ( $privacy as $key => $item ) { ?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&p=1"><?php print $item["privacy1"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&p=2"><?php print $item["privacy2"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&p=3"><?php print $item["privacy3"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&p=4"><?php print $item["privacy4"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&p=5"><?php print $item["privacy5"]; ?></a></li>

<?php   }
?>





                </ul>
              </li>
            </ul>
        </div>
      </div>
    </div><!--/.well -->

        <div class="well">
          <form action="index.php?q=home&a=proPush" method="post">
            <dl>
                <dt>About</dt>
                <dd><textarea name="about" cols="25" rows="5"><?php print $about["about"]; ?></textarea><br>
                    </dd><br />
                <dt>Birth day</dt>
                <dd><input name="birth_month" type="text" value="<?php print $about["birth_month"] ?>">/<input type="text" name="birth_day" value="<?php print $about["birth_day"] ?>">/<input type="text"  name="birth_year" value="<?php print $about["birth_year"]; ?>"></dd>
            </dl>
            <button class="btn btn-large btn-primary" type="submit">Update</button>
          </form>

        </div><!--/well-->





      </div><!--/span-->
      <!-- end sub navigation -->