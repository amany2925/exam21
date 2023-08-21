<?php
//q1-1
$somerar =15;
function aditt(){
    global $somerar;
    $somerar++;
    echo"somerar is $somerar";
}
aditt();
//output is somerar is 16


//q1-2
$arr=array(5=>1,12=>2);
$arr[]=56;
$arr["x"]=42;
    unset($arr);
    echo var_dump($arr);
    //output error

    //q1-3
    $var ='false';
    if($var){
        echo'true';
    }else{
        echo'false';
    }
    //output = true

?>
<?php 
//q2-1 
$n = 0;  
$a = 0;  
$b = 2;  
echo "Fibonacci series with the first 2 numbers as 0 and 2 is: ";   
echo "$a, $b";  
 
while ($n < 26 )   
{  
$c = $b + $a;  
echo ", ";
echo "$c";  
$a = $b;  
$b = $c;  
$n = $n + 1;
}

//q2-2
$year1=365;
;
if(($year1 % 4==0)&&($year1 % 100==0)||($year1 % 400==0)){

echo'the year is a leap year';}
else{
    echo'the year is not a leap year';
}
//q2-3

$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";
//q2-4
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
     if ($j == 1) {
       echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
     } else {
       echo str_pad($i*$j, 3, " ", STR_PAD_LEFT);
     }
  }
  echo "<br>";
}
//q2-5
function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique ;
  }
  $nums = array(1,1,2,2,3,4,5,5);
  print_r(remove_duplicates_list($nums));







/*Question 3 : True Or False 
1- Dynamic binding is being used for overloaded methods and Static 
binding is being used for overridden/overriding method. (false)
2- Abstract Method Cannot Be Inherited (flse)
3- Abstraction means hiding the internal details or mechanics of how 
an object does something (false)
4- Traits are a mechanism for code reuse in single inheritance 
languages(true)
5- Static functions are associated with the class, not an instance of 
the class.(true)


*/
?>









