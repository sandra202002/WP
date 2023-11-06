<?php
    if(isset($_POST['invoice']))
    {
        $item1=$_POST['item1'];
        $item2=$_POST['item2'];
        $item3=$_POST['item3'];
        $item4=$_POST['item4'];
        $item5=$_POST['item5'];

        $up1=$_POST['up1'];
        $up2=$_POST['up2'];
        $up3=$_POST['up3'];
        $up4=$_POST['up4'];
        $up5=$_POST['up5'];

   
        
        $qty1=$_POST['qty1'];
        $total1=$up1*$qty1;
        $qty2=$_POST['qty2'];
        $total2=$up2*$qty2;
        $qty3=$_POST['qty3'];
        $total3=$up3*$qty3;
        $qty4=$_POST['qty4'];
        $total4=$up4*$qty4;
        $qty5=$_POST['qty5'];
        $total5=$up5*$qty5;
        $total=$total1+$total2+$total3+$total4+$total5;
    }   
 ?>


<html>
    <style>
        td{
            text-align: center
        }
        
    </style>
    <body>
    <center>
        <br><br> 
        
        <form id='form2'>
            
            <h1><u>RKS STORES</u></h1>
            <h2><u>BILL RECEIPT</u></h2>
            <br>
            
            <table border='1' width='500' height='250'>
                
                <tr>
                    
                    <th>Sl.No</th>
                    <th>Item</th>
                    <th>Unit Per</th>
                    <th>Quantity</th>
                    <th>Total</th>

                </tr>
                
                <tr>
                    <td>1</td>
                    <td><?php echo $item1; ?></td>
                    <td><?php echo $up1;?></td>
                    <td><?php echo $qty1;?></td>
                    <td><?php echo $total1 ?> Rs.</td>
                    
                </tr>
                
                <tr>
                     <td>2</td>
                    <td><?php echo $item2 ?></td>
                    <td><?php echo $up2 ?></td>
                    <td><?php echo $qty2 ?></td>
                    <td><?php echo $total2 ?> Rs.</td>
                </tr>
                <tr>
                     <td>3</td>
                    <td><?php echo $item3 ?></td>
                    <td><?php echo $up2 ?></td>
                    <td><?php echo $qty3 ?></td>
                    <td><?php echo $total3 ?> Rs.</td>
                    
                    
                </tr>
                <tr>
                     <td>4</td>
                    <td><?php echo $item4 ?></td>
                    <td><?php echo $up4 ?></td>
                    <td><?php echo $qty4 ?></td>
                    <td><?php echo $total4 ?> Rs.</td>
                    
                    
                </tr>
                <tr>
                     <td>5</td>
                    <td><?php echo $item5 ?></td>
                    <td><?php echo $up5 ?></td>
                    <td><?php echo $qty5 ?></td>
                    <td><?php echo $total5 ?> Rs.</td>
                    
                </tr>
                
                <tr>
                    <th colspan='4'><center>Total</center></th>
                    <td><?php echo $total ?> Rs.</td>
                    
                </tr>
            </table>
            
            
        </form>
        
    </center>
        
    </body>
    
</html>

