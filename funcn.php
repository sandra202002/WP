<html>
    <head>
        <title>function</title>
    </head>
    <body>
        <form action=" " method="post" >
            <input type="text" name="txt" id="txt" >
            <input type="submit" name="cab" value="submit">
        </form>
    </body>
</html>


<?php
//function familyname($year,$name)
//{
//    echo $name," was born in ",$year;
//}
//
//familyname("2003","SANIYA");
//familyname("2004","TINA");
//familyname("2005","SANTA");
//familyname("2006","REKHA");

//function cube($n)
//{
//    return $n*$n*$n;
//    
//}
//
//echo "the cube is ", cube(6);


//function sum($A,$B)
//{
//    echo "the sum of ",$A," and ",$B," is ",$A+$B;
//}
//sum(4,9);

if(isset($_POST["cab"]))
{
    $n=$_POST["txt"];
    function cube($n)
    {
         return $n*$n*$n;
    }
    
}
echo "the cube is",cube($n);
?>
