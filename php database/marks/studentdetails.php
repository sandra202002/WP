<html>
    <?php include('generate.php') ?>
    <head>
        <title>STUDENT DATAILS</title><!-- comment -->
        <style>
            table{color:goldenrod} 
        </style>
    </head>
    <body>
        <form action="" method="post">
            <table border="2px solid" align="center">
                <tr><th colspan="4" align="center">MACE<br>MCA DEPARTMENT</th></tr>
                <TR>
                    <TH>
                        slno
                    </TH>
                    <th>
                        name
                    </th>
                    <th>
                        subject
                    </th>
                    <th>
                        mark
                    </th>
                </TR>
            <?php
            $a=0;
            while($a< 5){
                ?>
            
            <tr>
            
                <th><input type="number" name='slno[]'></th>
                <th><input type="text" name='name[]'></th>
                <th>
                <select name="subject[]" id="">
                <option value="">-SELECT ITEM-</option>
                    <option>-ADS-</option>
                    <option>-ASE-</option>
                    <option>-DFCA-</option>
                    <option>-MFC-</option>
                </select>
            </th>
                <th><input type="" name='mark[]' min="0" id=""></th>
                  
            </tr>
           <?php
           $a++;
            }
            ?>
            <tr><th colspan='4' align="center"><input type="submit" name="submit" value="submit"></tr>
            </table>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $connection=new mysqli("localhost","root","","mark");
            $sl=$_POST['slno'];
            $name=$_POST['name'];
            $sub=$_POST['subject'];
            $mark=$_POST['mark'];
        }
        for($i=0;$i<5;$i++)
        {
            $sn=$sl[$i];
            $n=$name[$i];
            $s=$sub[$i];
            $m=$mark[$i];
            if($n!='')
            {
                $c="INSERT INTO student_mark(`slno`, `name`, `subject`, `mark`) VALUES('$sn','$n','$s','$m')";
                if($connection->query($c)==TRUE)
                {
                    echo "<script> alert('added successfully');</script>";
                   
                }
                else 
                {
                     echo "connection failed:",$connection->connect_error;
                }

            }
        }
        ?>
    </body>
</html>