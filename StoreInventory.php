<html>
<h1> Store Inventory</h1>
<h3> Enter Product Details</h3>

<?php
$productName = $_POST['name'];
$productPlu = $_POST['plu'];
$productDesc = $productName . $productPlu;
?>
<form action="products.php" method=post>
    <legend>Add Item</legend>
    <label>Name:</label>
        <input type="text" name="name"
               required="required"/>
    </label>
    <label>PLU:</label>
    <input type="text" name="plu"
           required="required"/>
    <br />
    <label>Image:</label>
    <input type="file" name="productImage" /><br />

    <input type="submit" value="Add">
</form>
<?php
add_item($productDesc);
?>

</body>
</html>