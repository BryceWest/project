
      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">
            <form class="form-signin" action="index.php?q=home&a=add&p=<?php print $_GET["p"]; ?>" method="post">
                <input type="text" name="content" class="input-block-level" placeholder="How is your day so far?">
                <button class="btn btn-large btn-primary" type="submit">Post</button>
            </form>
          <?php  print $_SESSION["id"]; ?>
            <table class="table">
                <thead>
                    <td>Posts</td>
                </thead>
<?php
        foreach ( $content as $key => $item ) { ?>
                <tr>
                    <td class="span1"><img src="<?php print "pics/".$item["name"] ?>" /> </td>
                    <td class="span1"><?php print $item["username"]; ?></td>
                    <td class="span4"><?php print $item["content"]; ?></td>

                </tr>
<?php   }
?>
            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->