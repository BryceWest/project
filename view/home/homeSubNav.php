
      <!-- sub navigation -->
      <div class="offset1 span2">
        <div class="navbar">
     <div class="navbar-inner">
        <div class="nav-collapse collapse">


            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown">
                <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
<?php
                                                                                                foreach ( $privacy as $key => $item ) {
                                                                                                    switch ( $_GET["p"] ) {

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
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=home&p=1"><?php print $item["privacy1"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=home&p=2"><?php print $item["privacy2"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=home&p=3"><?php print $item["privacy3"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=home&p=4"><?php print $item["privacy4"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=home&p=5"><?php print $item["privacy5"]; ?></a></li>

<?php   }
?>





                </ul>
              </li>
            </ul>
        </div>
      </div>
              <?php print $privacy["privacy1"]; ?>
    </div><!--/.well -->
      </div><!--/span-->
      <!-- end sub navigation -->