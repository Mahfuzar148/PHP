<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison</title>
</head>
<body>
    <?php
    $n = 12;
    /**
     * if-ifelse statements
     */
    if($n%2==0){
        echo $n." is even number";
    }elseif($n%2==1){
        echo $n." is odd number";
    }else{
        echo $n." is neither even nor odd number";
    }
    /**
     * switch case
     */
    switch($n)
    {
        case $n%2==0: echo "<br>$n is even number";
        break;
        case $n%2==1 : echo "$n is odd number";
        break;
        default: echo "$s is nether even nor odd number";
    }
    /**
     * Ternary operator
     * (Condition)? True statement : False statement
     */
    echo"<br>";
    echo  ($n%2==0)? "\n$n is even" : " \n$n is odd number";
    
    ($n>20)? $x="$n is greater than 20" : $x= "$n is less than 20";

    echo "<br>$x";

    $z = ($n>100)? "$n is greater than 100":"$ is less than 100";
    echo "<br>$z";

    ?>
</html>
