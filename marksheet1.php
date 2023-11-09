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
            
            <h1><u>MACE</u></h1>
            <h2><u>Kothamngalam</u></h2>
            <br>
            
            <table border='1' width='500' height='250'>
                <tr>
                    <th>FIRST SESSIONAL MARK SHEET</th>
                </tr>
                <tr>
                    
                    <th>Sl.No</th>
                    <th>SUBJECT</th>
                    <th>MARK</th>
                    <th>PASS/FAILED</th>
                    

                </tr>
                
                <tr>
                    <td>1</td>
                    <td>ADS</td>
                    <td><?php echo $up1;?></td>
                    <td><?php echo $qty1;?></td>
                    <td><?php echo $total1 ?> Rs.</td>
                    
                </tr>
                
                <tr>
                     <td>2</td>
                    <td>ASE</td>
                    <td><?php echo $up2 ?></td>
                    <td><?php echo $qty2 ?></td>
                    <td><?php echo $total2 ?> Rs.</td>
                </tr>
                <tr>
                     <td>3</td>
                    <td>MFC</td>
                    <td><?php echo $up2 ?></td>
                    <td><?php echo $qty3 ?></td>
                    <td><?php echo $total3 ?> Rs.</td>
                    
                    
                </tr>
                <tr>
                     <td>4</td>
                     <td>DFO</td>
                    <td><?php echo $up4 ?></td>
                    <td><?php echo $qty4 ?></td>
                    <td><?php echo $total4 ?> Rs.</td>
                    
                    
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

