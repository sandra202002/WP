<!DOCTYPE html>
<html>
<head>
    <title>Purchase Bill</title>
</head>
<body>
    <h1>Purchase Bill</h1>
    
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price (per item)</th>
            <th>Total</th>
        </tr>
        <?php
        // Sample item data - Replace this with your own data
        $items = array(
            array("Item 1", 2, 10.00),
            array("Item 2", 3, 15.00),
            array("Item 3", 1, 5.00)
        );

        $totalAmount = 0;

        foreach ($items as $item) {
            $itemName = $item[0];
            $quantity = $item[1];
            $pricePerItem = $item[2];
            $total = $quantity * $pricePerItem;
            $totalAmount += $total;

            echo "<tr>";
            echo "<td>$itemName</td>";
            echo "<td>$quantity</td>";
            echo "<td>$pricePerItem</td>";
            echo "<td>$total</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <p>Total Amount: $<?php echo number_format($totalAmount, 2); ?></p>
</body>
</html>
