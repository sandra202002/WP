<?php



$connection=new mysqli("localhost","root","","MCA_DEPT");

if ($connection->connect_error)
{
    die("CONNECTION FAILED".$connection->connect_error);
}

?>