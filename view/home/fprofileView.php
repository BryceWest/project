
      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">

<?php print $message."<br />";
if ($message == "You are not friends.") {
      print "Would you like to be?<br />";
      print "

        <div class='nav-collapse collapse'>


            <ul class='nav'>
              <li id='fat-menu' class='dropdown row'>
                <a href='#'' id='drop3' role='button' class='dropdown-toggle offset1' data-toggle='dropdown'><form method='post' action='index.php?q=home&a=addFriend&f=".$f."'>";
      foreach ( $privacy as $key => $item ) {
                        switch ( $_GET["p"] ) {

                              case "1":
                                  print $item["privacy1"];
                                  $p = $item["privacy1"];
                                  break;

                              case "2":
                                  print $item["privacy2"];
                                  $p = $item["privacy2"];
                                  break;

                              case "3":
                                  print $item["privacy3"];
                                  $p = $item["privacy3"];
                                  break;

                              case "4":
                                  print $item["privacy4"];
                                  $p = $item["privacy4"];
                                  break;

                              case "5":
                                  print $item["privacy5"];
                                  $p = $item["privacy5"];
                                  break;

                              default:
                                  print $item["privacy1"];
                                  $p = $item["privacy1"];
                                  break;
                          }
                    }
?>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
<?php
        foreach ( $privacy as $key => $item ) { ?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="javascript:document.getElementById('privacy').value='<?php print 1; ?>'"><?php print $item["privacy1"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="javascript:document.getElementById('privacy').value='<?php print 2; ?>'"><?php print $item["privacy2"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="javascript:document.getElementById('privacy').value='<?php print 3; ?>'"><?php print $item["privacy3"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="javascript:document.getElementById('privacy').value='<?php print 4; ?>'"><?php print $item["privacy4"]; ?></a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="javascript:document.getElementById('privacy').value='<?php print 5; ?>'"><?php print $item["privacy5"]; ?></a></li>
                    <input type="text" value="" id="privacy" name="privacy" class="hidden" />

<?php   } ?><button class='btn btn-large btn-primary' type='submit'>Add Friend</button></form>
</ul>
              </li>
            </ul>
        </div>
<?php } ?>
</div>
</div>

<!--/span-->
      <!-- End page content -->