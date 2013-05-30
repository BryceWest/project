
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
<?php
            if($_POST['key']==$key){ ?>
                <tr>

                <form class="form" action="index.php?q=prod&a=push" method="post">
                    <td><input type="text" name="prod_name" value="<?php echo $item["prod_name"]; ?>"></td>
                    <td><input type="text" name="prod_description" value="<?php echo $item["prod_description"]; ?>"></td>
                    <td><input type="text" name="retail" value="<?php echo $item["retail"]; ?>"></td>
                    <td><input type="text" name="qty" value="<?php echo $item["qty"]; ?>"></td>
                    <td><button class="btn" type="submit">Submit</button></td>
                    <td><input type="text" name="id" class="hidden" value="<?php echo $item["id"]; ?>"></td>
                </form>
                </tr>





<?php            }else{?>
                <tr>
                    <td><?php print $item["prod_name"]; ?></td>
                    <td><?php print $item["prod_description"]; ?></td>
                    <td><?php print $item["retail"]; ?></td>
                    <td><?php print $item["qty"]; ?></td>
                </tr>
<?php   }
   }
?>

            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->