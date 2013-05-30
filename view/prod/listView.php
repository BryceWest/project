
      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Qty</td>
                    </tr>
                </thead>
<?php
        foreach ( $product as $key => $item ) { ?>
                <tr>
                    <td><?php print $item["prod_name"]; ?></td>
                    <td><?php print $item["prod_description"]; ?></td>
                    <td><?php print $item["retail"]; ?></td>
                    <td><?php print $item["qty"]; ?></td>
                    <td>
            <form class="form" action="index.php?q=prod&a=update" method="post">
                <input type="text" name="key" class="hidden" value="<?php echo $key; ?>">
                <button class="btn" type="submit">Edit Row</button>
            </form>
                    </td>
                </tr>
<?php   }
?>

            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->