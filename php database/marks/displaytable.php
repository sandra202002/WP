<?php
//checking connection
$connection=new mysqli("localhost","root","","mark");
if($connection->connect_error)
{
    die("connection failed" .$connection->connect_error);
}
$stu="SELECT * FROM student_mark";
$result=$connection->query($stu);

if($result->num_rows>0)
{
    echo "<table border='1'><tr>
    <td>slno</td><td>name</td><td>subjcet</td><td>mrk</td></tr>";
    
    while($row=$result->fetch_assoc())
    {
        echo "<tr><td>" .$row['slno']."</td><td>" .$row['name']."</td><td>" .$row['subject']. "</td><td>" .$row['mark']."</td></tr><br>";
    }
    echo "</table>";
}
 else 
    
 {
     echo "0 result";
 }
 $connection->close();
?>