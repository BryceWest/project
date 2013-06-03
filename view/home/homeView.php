
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
                    <td><?php print $item["username"]; ?>
                        <?php print $item["content"]; ?>
                    </td>
                </tr>
<?php   }
?>
            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->