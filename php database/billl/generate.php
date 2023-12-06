<?php



$connection=new mysqli("localhost","root","","bill");

if ($connection->connect_error)
{
    die("CONNECTION FAILED".$connection->connect_error);
}

?>