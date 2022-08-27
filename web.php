<?php   
//echo "welcom to ecoin";
//fdglsdfg
/*
fdmlgksfdjgmlfdskjg
sdfgksdfkgfds
*/
//var 
$x = 25;// integer
//echo $x; 
$moy = 12.36 ; //float
$sts = 2564544846.5454454;  // double
$str = "Ecoin"; // String
$isAdmin = true;
$alpha = 'C'; // char

const PIS = 3.14;
define("PI",3.14);
$a = 14;
if($a == 14){
    //echo "Welcom";
}else{
    echo "Error";
}

switch($a){
    case 25:
        echo "a is 25";
        break;
    case 14:
    //    echo " a is 14";
        break;
    default:
       echo "No Result";        
}

$i = 0;
while($i<10){
   // echo "The Result is  $i";
    $i++;
}

$j = 0 ;
do{
    //echo "The Next Number is  $j";
    $j++;

}while($j<10);

for($k = 0;$k<10;$k++){
   // echo "The result from Froo Loop is $k";
}
 
echo"<br>";
$tab = [45,253,6,8,"Ecoin",true];

foreach($tab as $s){
//    echo $s;
}

//Array Num

$student = [
    "name"=>"Ahmed",
    "age"=>25,
    "email"=>"ahmed@gmail.com"
];

//Array Assoc
for ($i=0; $i <10 ; $i++) { 
   if($i==5)
   continue;
   echo $i;
}

//var g
//inc req 
//fun lib






?>