<html>
<h1> Store Inventory</h1>

<?php echo date ("I F D, Y"); ?>

<h3> Enter Product Details</h3>

<fieldset>
    <legend>Add Item</legend>
    <label>Name:</label>
    <input type="text" name="name"
           required="required"/></label><br />
    <label>PLU:</label>
    <input type="text" name="plu"
           required="required"/></label><br />
    <label>Image:</label>
    <input type="file" name="productImage" /><br />
</fieldset>

<input type="submit" value="Add">

</html>