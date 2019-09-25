<html>
<h1> Store Inventory</h1>
<h2> Enter Product Details</h2>
<form method="POST" action="StoreInventory.php">
    Name: <input type="text" name="name">
    <br><br>
    PLU: <input type="text" name="plu">
    <br><br>
    <label>Image:</label>
    <input type="file" name="productImage" /><br />
    <input type="submit" value="Add">
</form>

<?php
use http\Env\Request;
$productDesc = array_key_exists('name', $_POST) ? $_POST['name'] : null;
$productPlu = array_key_exists('plu', $_POST) ? $_POST['plu'] : null;
$file = "productDesc.txt";
add_item($productDesc, $productPlu);
show_items($productDesc);

function add_item($productDesc, $productPlu){
    global $file;
    if(!empty($productDesc)){
        $fp = fopen($file,"a"); //Appends
        fputs($fp, nl2br($productDesc). ",");
        fputs($fp, nl2br($productPlu). "<br/>\n");
        fclose($fp);
    }
}

function show_items(){
    global $file;
    if(file_exists($file)){
        $fp = fopen($file, "r"); //Reads
        while(!feof($fp)){
            echo fgets($fp); //Reads line
        }
        fclose($fp);
    }
}

?>
</body>
</html>