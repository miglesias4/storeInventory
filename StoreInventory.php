<html>
<h1> Store Inventory</h1>

<?php echo date ("I F D, Y"); ?>

<h3> Enter Product Details</h3>

<fieldset action="products.php" method=post>
    <legend>Add Item</legend>
    <label>Name:</label>
    <label>
        <input type="text" name="name"
               required="required"/>
    </label><br />
    <label>PLU:</label>
    <label>
        <input type="text" name="plu"
               required="required"/>
    </label><br />
    <label>Image:</label>
    <input type="file" name="productImage" /><br />

    <input type="submit" value="Add">

</fieldset>
</html>