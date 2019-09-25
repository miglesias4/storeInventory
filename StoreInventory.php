/*
Created and Modified by: Matthew Iglesias
CS3360 - Programming Languages
Professor: Nigel Ward
Fall 2019
*/

<html>
<h1> Store Inventory</h1>
<h2> Enter Product Details</h2>
<form method="POST" action="StoreInventory.php"> //Using POST for passing variables
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
$productDesc = array_key_exists('name', $_POST) ? $_POST['name'] : null; //Creates array for product name and plu
$productPlu = array_key_exists('plu', $_POST) ? $_POST['plu'] : null;
$file = "productDesc.txt"; //All data stored in this text file; no whitespace made
add_item($productDesc, $productPlu);
show_items($productDesc);

//Appends the created items onto the inventory
function add_item($productDesc, $productPlu){
    global $file;
    if(!empty($productDesc)){
        $fp = fopen($file,"a"); //Appends
        fputs($fp, nl2br($productDesc). ",");
        fputs($fp, nl2br($productPlu). "<br/>\n");
        fclose($fp);
    }
}

//Displays the inventory of items
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