<html>
<head>
    <title> Product Inventory </title>
</head>
<body>
    <table border="2" bgcolor="#efefef">
        <thread>
            <tr>
                <th></th>
                <th scope ="col"> Product Name:</th>
                <th scope ="col"> PLU:</th>
            </tr>
        </thread>
        <tbody>
        <?php
        $file = "products/inventory.txt";

        function add_item($productDesc){
            global $file;
            if(!empty($productDesc)){
                $fp = fopen($file,"a"); //Appends
                fputs($fp, nl2br($productDesc). "<br/>\n");
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

        </tbody>
    </table>

</body>
</html>