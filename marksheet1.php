<?php

if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $roll_no=$_POST["rollno"];
    $ads=$_POST["marks1"];
    $ase=$_POST["marks2"];
    $mfc=$_POST["marks3"];
    $dfo=$_POST["marks4"];
    
?>

<html>
    <head>
        <title>internal marks</title>
    </head>
    
    
    <body>
        <form action="index.html" method="post">
        <h1 align="center">MACE</h1>
        <h3 align="center">kothamngalam,8866443690</h3>
        <table align="center" border="solid" width="50%">
            <tr>
                <th align="center" colspan="3">FIRST SESSIONAL EXAM</th>
            </tr>
            <tr>
                <th colspan="4">
                    Roll no:
                    <label ><?php echo $roll_no;?></label>
                </th>
            </tr>
             <tr>
                <th colspan="4">
                    Name:
                    <label><?php echo $name;?>" </label>
                </th>
            </tr>
            <tr>
                <th>Slno:</th>
                <th>Subject:</th>
                <th>Mark:</th>
                <th>pass/fail</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ADS</td>
                <td><?php echo $ads; ?></td>
                <td>
                    <?php
                    
                    if($ads<25)
                    {
                        echo 'FAIL';
                    }
                    else
                    {
                        echo 'PASS';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>ASE</td>
                <td><?php echo $ase; ?></td>
                <td>
                    <?php
                    
                    if($ase<25)
                    {
                        echo 'FAIL';
                    }
                    else
                    {
                        echo 'PASS';
                    }
                    ?>
                </td>
              
            </tr>
            <tr>
                <td>3</td>
                <td>MFC</td>
                <td><?php echo $mfc; ?></td>
                <td>
                    <?php
                    
                    if($mfc<25)
                    {
                        echo 'FAIL';
                    }
                    else
                    {
                        echo 'PASS';
                    }
                    ?>
                </td>
              
            </tr>
            <tr>
                <td>4</td>
                <td>DFO</td>
                <td><?php echo $dfo; ?></td>
                <td>
                    <?php
                    
                    if($dfo<25)
                    {
                        echo 'FAIL';
                    }
                    else
                    {
                        echo 'PASS';
                    }
                    ?>
                </td>
            </tr>
           

       
            <tr><th colspan="2">TOTAL:<?php echo $total=$ads+$ase+$dfo+$mfc;  ?></th>
                <th colspan="2">
                     <?php
                    
                    if($total<90)
                    {
                        echo 'FAIL';
                    }
                    else
                    {
                        echo 'PASS';
                    }
                    ?>
                </th></tr>
            
        </table>
        </form>
    </body>
</html>
<?php

}
?>