
      <!-- sub navigation -->

      <div class="span3">

        <div class="navbar offset4">
     <div class="navbar-inner">
        <div class="nav-collapse collapse">


            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown row">
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
                </a><a href="index.php?q=home&a=privEdit" class="btn">Edit Privacy Names</a>
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



