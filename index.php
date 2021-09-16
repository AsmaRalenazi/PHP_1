<?php

// function hello(){
    //     echo "Hello Asma !";
    // }
    // hello();
    // echo "<pre>";


//the function 1 takes array 
$names=["2","6"];

function takes_array($names){
    echo "$names[0] + $names[1] = ", $names[0]+$names[1];
}
takes_array($names);

echo "<pre>";


//the function 2 add some extra
$friendName = ' Alaa and ';
function add_some_extra(&$myName)
{
    $myName .= 'Asmaa ';
}
add_some_extra($friendName);
echo $friendName;   


//the function 3 take prametar and you can change for invoc
function makebreakfast($type = "apple pie")
{
    return "Making a break fast of $type  <pre> ";
}
echo "<pre>";
echo makebreakfast();
echo makebreakfast(null);
echo makebreakfast("chesses pie");

?>