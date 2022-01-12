<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>
   <?php
   for($y=0;$y<10;$y++){
       if($y<10){
           echo" $y-";
       }
    }
    echo "10";
    echo("<br>");

$totall=0;
for($total=0;$total<=30;$total++){
    
    $totall +=$total;


}
echo $totall; 
echo("<br>"); 

$str= 'A';
for($q=1;$q<=5;$q++){
    for($j=5-$q;$j>0;$j--)
        echo " " , "A ";
        for($k=1;$k<=$q;$k++)
            echo " ","$str ";
            $str++;
    echo "<br>";
}
echo"<br>";

$num = 1;
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
        echo "1 ";
        for($k=1;$k<=$i;$k++)
            echo "$num ";
    echo "<br>";
    $num++;
}
echo"<br>";  
$num = 1;
$s=1;
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
    echo "0 ";
    if($i==$k)
    {echo $s++;}
        for($k=1;$k<=$i;$k++)
            echo "0 ";
    echo "<br>";    
}
echo "<br>";    

$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo  $n = $x;
echo "<br>";

$f1 = 0;
$f2 = 1;
$n = 5;
echo $f1;
echo '<br/>';
for($i = 0; $i <= $n; $i++) {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    echo $f3 ."<br />"; 
}
   

$str8 = "orange coding academy";
echo substr_count($str8,'c');


echo "<table><tbody>";
for($i=1;$i<=6;$i++){
    echo "<tr>";
    for($j=1;$j<=5;$j++){
        echo "<td> $i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";



$num= range(1,50);
echo "<p>";
foreach($num as $val){
    if($val%3===0) echo "Fizz ";
    else echo $val." ";
}
echo "</p>";


$num=1;
for($i=1;$i<=5;$i++) {
for($j=1;$j<=$i;$j++) {
    echo "$num "; 
    $num++;
}
echo "<br>"; 

}

for($i=1;$i<=5;$i++){
    $str = 'A';
    for($j=1;$j<=$i;$j++){
        echo "$str ";
        $str++;
    }
    echo "<br>";
    if($i===5){
        for($k=4;$k>0;$k--){
            $str='A';
            for($z=1;$z<=$k;$z++){
                echo "$str ";
                $str++;
            }
            echo "<br>";
        }
    }
}
echo("<br>");
// for ($i = 1; $i < 5; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo " ** ";
//     }
//     echo '<br />';
// }
// echo '<br />';

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
    echo("z");
}
echo("<br>");


}
echo("<br>");
for($i=0;$i<5;$i++){
    for($j=$i;$j<5;$j++){
    echo("z");
}
echo("<br>");


}



$n=10;
for($i=0;$i<=$n;$i++)
{
for($j=$i;$j<= $n;$j++){
    echo ("-");
}
for($j=1;$j< $i;$j++){
    echo "*";
}
for($j=1;$j<=$i;$j++){
    echo "*";
}
for($j=$i;$j<= $n;$j++){
    echo "-";
}
echo "<br>";{
}

}
   ?> 
</body>
</html>