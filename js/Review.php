<?php 

 //Declare
 $family = ["Bob","Gill",8];
 $kids = array();
 array_push($kids,"Lenny", "George","Lila");
 array_splice($kids,1,0,"Harry");
 
 $family[]=$kids;
 var_dump($family);
 echo($family[2]);
 //Initalize
 /*foreach ($kids as $kid)
 {
     array_push($family,$kid);
 }
 $length=count($kids);
for ($f=0;$f<$length;$f++)
 {
     array_push($family,$kids[$f]);
 }*/
//Print out
//var_dump($family);
//associative array

/*$familH = ["aunt"=>"Sue",
    "uncle"=>"Harry",
    "counsin"=>"Jen"];
unset($familH["uncle"]);
$familH["uncle"]="Harry";
foreach($familH as $member=>$name)
{
    echo $member. " ";
}*/
//var_dump($familH);
 //Use : iterate or loop





?>