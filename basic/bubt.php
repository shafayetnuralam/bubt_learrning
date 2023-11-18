<?php 
/*Comment*/
// Local Variable
$title ="BUBT";

//Variable print
echo $title;
echo "<br>";
//Global Variable
echo $_POST['username'];

echo "<br>";
//if condition
// ! NOT
// =/==/=== Equal
// != NOT Equal // <> NOT Equal
// < Less than
// > Greater than
// <= Less than or equal
// >= Greater than or equal

if(!empty($_POST['username'])){

    echo $_POST['username'];

}else{
    echo "Please enter your name";
}


//loop
//for loop ***
//while loop
//do while loop
//foreach loop  **

//for loop
echo "<br>";
for($i=1;$i<=10;$i++){
    echo $i;
    echo "<br>";
}

//while loop
echo "<br>";
$j=1;
while($j<=10){
    echo $j;
    echo "<br>";
    $j++;
}

//foreach loop (Array)
echo "<br>";
$colors = array("red","green","blue","yellow");
print_r($colors); 
// print_r() function is used to print human-readable information about a variable
echo "<br>";
foreach($colors as $value){
    echo $value;
    echo "<br>";
}


?>