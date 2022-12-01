<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Confirmation Page</title>
    </head>
    <body>
        <?php
        //Get the input.
        if (isset($_POST['Stock'])) {
            $stockData = $_POST['Stock'];
        }
        ?>
        <p>Stock Confirmation.</p>
        <table width="559" border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th width="407">Product</th>
                <th width="126">Quantity</th>
            </tr>
            <?php
            $stock_total = 0;
            foreach ($stockData as $key => $value) {
                ?>
                <?php
                $stock_total = $stock_total + $value;
                if (!empty($value)) {
                    ?>
                    <tr> 
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
            <?php } 
            } ?>

            <tr>
                <td >Total Items</td>
                <td width="126"><?php print $stock_total; ?></td>
            </tr>
        </table>
    </body>
</html>
