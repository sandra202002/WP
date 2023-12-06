
<html>
    <?php include('generate.php');  ?>
    <head>
        <title>
            Bill Invoice
        </title>
    
    </head>
    <body>
  
        <form action="" method="post">
        <table border=solid align='center'>
            <tr> <th colspan="3"><center><h1>SYS Supermarket</h1></center></th><br></tr>
        <tr><th colspan="3"><h2><?php echo date("d/m/y"),date("l"); ?></h2></th></tr>   
            <tr>
                <th>
                    Item Name
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Unit price
                </th>
                
            </tr>
            <?php
            $a=0;
            while($a< 5){
                ?>
            
            <tr>
            
                <th><input type="text" name='itemname[]' placeholder="item name"></th>
                <th><input type="number" name='qty[]' placeholder="quantity"></th>
                <th><input type="number" name='u_p[]' placeholder="unit price"></th>
                  
            </tr>
           <?php
           $a++;
            }
            ?>
           
           
            <tr>
                <th><input type="submit" name="invoice" value="bill"></th>
                <th><a href="displaytable.php" style="border: radius 25px;">DISPLAY THE TABLE</a></th>
            </tr>
        </table>
        </form>
        <?php


if (isset($_POST['invoice'])) 
{
    $con=new mysqli("localhost","root","","bill");
   
    $item1=$_POST['itemname'];
    $q1=$_POST['qty'];
    $u1=$_POST['u_p'];
    for($i=0;$i<5;$i++)
    {
  
        $item=$item1[$i];
        $q=$q1[$i];
        $u=$u1[$i];

        if($item!='')
        {
            $cl="INSERT INTO generated_bill(`itemname`, `qty`, `u_p`) VALUES('$item','$q','$u')";
            if ($connection->query($cl)==TRUE) {
    
                echo "<script> alert('added successfully');</script>";
            }
            else {
                    echo "connection failed:",$connection->connect_error;
            }
        }

    }


 
  
}

?>
    </body>
</html>
