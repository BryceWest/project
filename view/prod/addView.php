
<!-- page content -->
      <div class="span9">
        <div class="pageContent">

            <form class="form-horizontal" method="post" action="index.php?q=prod&a=insert">
                    <legend>New Product</legend>

<?php if ( $_POST && "" != $valid["message"] ) { ?>

                    <div class="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Warning!</strong> Please fix form errors. <br />
                        <?php print $valid["message"] ?>
                    </div>
<?php } ?>

                    <div class="control-group">
                        <label class="control-label"for="name">Category:</label>
                        <div class="controls">
                            <select id="category" name="category" >
                                <option value="1">1 - Kites</option>
                                <option value="2">2 - Kite Boards</option>
                                <option value="3">3 - Sure Boards</option>
                                <option value="4">4 - Bindings</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"for="name">Product Name:</label>
                        <div class="controls">
                            <input id="name" name="name" type="text" size="15" value="<?php echo $_POST['name']; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"for="description">Description:</label>
                        <div class="controls">
                            <input id="description" name="description" type="text" size="15" value="<?php echo $_POST['description']; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"for="cost">Cost:</label>
                        <div class="controls">
                            <input id="cost" name="cost" type="text" size="15" value="<?php echo $_POST['cost']; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"for="retail">Retail:</label>
                        <div class="controls">
                            <input id="retail" name="retail" type="text" size="15" value="<?php echo $_POST['retail']; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"for="cost">Qty:</label>
                        <div class="controls">
                            <input id="qty" name="qty" type="text" size="15" value="<?php echo $_POST['qty']; ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button id="submit" class="btn" name="submit" type="submit">Submit</buttton>
                        </div>
                    </div>
                </form>


        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->