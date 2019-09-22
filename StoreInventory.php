<html>
<h1> Store Inventory</h1>

<?php echo date ("I F D, Y"); ?>

<h3> Enter Product Details</h3>

<form action="products.php", method=post>
    <legend>Add Item</legend>
    <label>Name:</label>
        <input type="text" name='names'
               required="required"/>
    </label><br />
    <label>PLU:</label>
    <input type="text" name="plu"
           required="required"/>
    <br />
    <label>Image:</label>
    <input type="file" name="productImage" /><br />

    <input type="submit" value="Add">
</form>

<body>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>PLU</th>
        </tr>

    </table>
</body>
</html>