<?php
    $title="View Products";
    
    
?>
 
<center>
        <a href="addProduct.php">Add Product</a> |
        <a href="viewProduct.php">Display Products</a>
    </center>
 
    <div>
    <fieldset>
        <legend>Degree</legend>
        <table border="1">
            <tr>
                <td><b>NAME<b></td>
                <td><b>PROFIT<b></td>
            </tr>
 
            <?php  for($i=0; $i<count($users); $i++){ ?>
                <tr>
                    <td><?=$users[$i]['Name']?></td>
                    <td><?=$users[$i]['Selling Price']-$users[$i]['Buying Price']?></td>
                    <td>
                        <a href="edit.php?id=<?=$users[$i]['Name']?>">Edit</a> |
                        <a href="delete.php?id=<?=$users[$i]['Name']?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>