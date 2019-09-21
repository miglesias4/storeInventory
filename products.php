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
        <!-- PHP code here -->
        <?php
            if(isset($_POST['name'])){
                $productName = $_POST['name'];
                echo $productName;
            }
            else{
                $productName = null;
                echo "No name found";
            }
        if(isset($_POST['plu'])){
            $productPLU = $_POST['name'];
            echo $productName;
        }
        else{
            $productPLU = null;
            echo "No PLU found";
        }
            for($i = 0; $i < 6; $i++){
                echo $productName;
                echo $productPLU;
        }
        ?>

        </tbody>
    </table>

</body>
</html>