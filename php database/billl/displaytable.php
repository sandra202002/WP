<?php
//checking connection
$connection=new mysqli("localhost","root","","bill");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
$stu="SELECT * FROM generated_bill";
$result=$connection->query($stu);

if($result->num_rows>0)
{
    echo "<table border='1'><tr>
    <td>Item name</td><td>Quantity</td><td>unit price</td></tr>";
    
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>" .$row['id']."</td><td>" .$row['sname']."</td></tr><br>";
    }
    echo "</table>";
}
 else 
    
 {
     echo "0 result";
 }
 $connection->close();
?>
