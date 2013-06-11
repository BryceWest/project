
      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">


            <table class="table">
                <thead>
                    <td>Posts</td>
                </thead>
<?php
        foreach ( $content as $key => $item ) { ?>
                <tr>
                    <td class="span2"><img src="<?php print "pics/".$item["name"] ?>" /> </td>
                    <td class="span1"><?php print $item["username"]; ?></td>
                    <td><?php print $item["content"]; ?></td>

                </tr>
<?php   }
?>
            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->