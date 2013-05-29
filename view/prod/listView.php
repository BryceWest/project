
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
                </tr>
<?php   }
?>

            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->