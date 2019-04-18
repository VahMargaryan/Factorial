<?php
if ($_POST) 
{
    $fact = 1;
    $number = $_POST['n'];
    if (is_numeric($number))
    {
        if ($number >=0)
        {
            for ($i = 1; $i <= $number; $i++)
            {
                $fact = $fact * $i;
            }
            echo  "<h3 id='num' style='color:white'> Fact. of $number is " . " " . $fact . "<br>";
        }
        else
        {
            echo "<h3 style='color:white'> Number must be greater or equal zero";
        }
     }
    else
    {
        echo "<h3 style='color:white'>Input Number Only";
    }
}
?>
