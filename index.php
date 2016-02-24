<?php

function createDeck()
{
$cards= array(
         array("Suite"=>"Clubs",
          "Value"=>1,
          "Face"=>"Ace",
          "Picture"=>"../assets/clubs/1.png"),
          array("Suite"=>"Clubs",
          "Value"=>2,
          "Face"=>"Two",
          "Picture"=>"../assets/clubs/2.png"),
          array("Suite"=>"Clubs",
          "Value"=>3,
          "Face"=>"Three",
          "Picture"=>"../assets/clubs/3.png"),
          array("Suite"=>"Clubs",
          "Value"=>4,
          "Face"=>"Four",
          "Picture"=>"../assets/clubs/4.png"),
          array("Suite"=>"Clubs",
          "Value"=>5,
          "Face"=>"Five",
          "Picture"=>"../assets/clubs/5.png"),
          array("Suite"=>"Clubs",
          "Value"=>6,
          "Face"=>"Six",
          "Picture"=>"../assets/clubs/6.png"),
          array("Suite"=>"Clubs",
          "Value"=>7,
          "Face"=>"Seven",
          "Picture"=>"../assets/clubs/7.png"),
          array("Suite"=>"Clubs",
          "Value"=>8,
          "Face"=>"Eight",
          "Picture"=>"../assets/clubs/8.png"),
          array("Suite"=>"Clubs",
          "Value"=>9,
          "Face"=>"Nine",
          "Picture"=>"../assets/clubs/9.png"),
          array("Suite"=>"Clubs",
          "Value"=>10,
          "Face"=>"Ten",
          "Picture"=>"../assets/clubs/10.png"),
          array("Suite"=>"Clubs",
          "Value"=>11,
          "Face"=>"Jack",
          "Picture"=>"../assets/clubs/11.png"),
          array("Suite"=>"Clubs",
          "Value"=>12,
          "Face"=>"Queen",
          "Picture"=>"../assets/clubs/12.png"),
          array("Suite"=>"Clubs",
          "Value"=>13,
          "Face"=>"King",
          "Picture"=>"../assets/clubs/13.png"),
          array("Suite"=>"Diamonds",
          "Value"=>1,
          "Face"=>"Ace",
          "Picture"=>"../assets/diamonds/1.png"),
          array("Suite"=>"Diamonds",
          "Value"=>2,
          "Face"=>"Two",
          "Picture"=>"../assets/diamonds/2.png"),
          array("Suite"=>"Diamonds",
          "Value"=>3,
          "Face"=>"Three",
          "Picture"=>"../assets/diamonds/3.png"),
          array("Suite"=>"Diamonds",
          "Value"=>4,
          "Face"=>"Four",
          "Picture"=>"../assets/diamonds/4.png"),
          array("Suite"=>"Diamonds",
          "Value"=>5,
          "Face"=>"Five",
          "Picture"=>"../assets/diamonds/5.png"),
          array("Suite"=>"Diamonds",
          "Value"=>6,
          "Face"=>"Six",
          "Picture"=>"../assets/diamonds/6.png"),
          array("Suite"=>"Diamonds",
          "Value"=>7,
          "Face"=>"Seven",
          "Picture"=>"../assets/diamonds/7.png"),
          array("Suite"=>"Diamonds",
          "Value"=>8,
          "Face"=>"Eight",
          "Picture"=>"../assets/diamonds/8.png"),
          array("Suite"=>"Diamonds",
          "Value"=>9,
          "Face"=>"Nine",
          "Picture"=>"../assets/diamonds/9.png"),
          array("Suite"=>"Diamonds",
          "Value"=>10,
          "Face"=>"Ten",
          "Picture"=>"../assets/diamonds/10.png"),
          array("Suite"=>"Diamonds",
          "Value"=>11,
          "Face"=>"Jack",
          "Picture"=>"../assets/diamonds/11.png"),
          array("Suite"=>"Diamonds",
          "Value"=>12,
          "Face"=>"Queen",
          "Picture"=>"../assets/diamonds/12.png"),
          array("Suite"=>"Diamonds",
          "Value"=>13,
          "Face"=>"King",
          "Picture"=>"../assets/diamonds/13.png"),
          array("Suite"=>"Hearts",
          "Value"=>1,
          "Face"=>"Ace",
          "Picture"=>"../assets/hearts/1.png"),
          array("Suite"=>"Hearts",
          "Value"=>2,
          "Face"=>"Two",
          "Picture"=>"../assets/hearts/2.png"),
          array("Suite"=>"Hearts",
          "Value"=>3,
          "Face"=>"Three",
          "Picture"=>"../assets/hearts/3.png"),
          array("Suite"=>"Hearts",
          "Value"=>4,
          "Face"=>"Four",
          "Picture"=>"../assets/hearts/4.png"),
          array("Suite"=>"Hearts",
          "Value"=>5,
          "Face"=>"Five",
          "Picture"=>"../assets/hearts/5.png"),
          array("Suite"=>"Hearts",
          "Value"=>6,
          "Face"=>"Six",
          "Picture"=>"../assets/hearts/6.png"),
          array("Suite"=>"Hearts",
          "Value"=>7,
          "Face"=>"Seven",
          "Picture"=>"../assets/hearts/7.png"),
          array("Suite"=>"Hearts",
          "Value"=>8,
          "Face"=>"Eight",
          "Picture"=>"../assets/hearts/8.png"),
          array("Suite"=>"Hearts",
          "Value"=>9,
          "Face"=>"Nine",
          "Picture"=>"../assets/hearts/9.png"),
          array("Suite"=>"Hearts",
          "Value"=>10,
          "Face"=>"Ten",
          "Picture"=>"../assets/hearts/10.png"),
          array("Suite"=>"Hearts",
          "Value"=>11,
          "Face"=>"Jack",
          "Picture"=>"../assets/hearts/11.png"),
          array("Suite"=>"Hearts",
          "Value"=>12,
          "Face"=>"Queen",
          "Picture"=>"../assets/hearts/12.png"),
          array("Suite"=>"Hearts",
          "Value"=>13,
          "Face"=>"King",
          "Picture"=>"../assets/hearts/13.png"),
          array("Suite"=>"Spades",
          "Value"=>1,
          "Face"=>"Ace",
          "Picture"=>"../assets/spades/1.png"),
          array("Suite"=>"Spades",
          "Value"=>2,
          "Face"=>"Two",
          "Picture"=>"../assets/spades/2.png"),
          array("Suite"=>"Spades",
          "Value"=>3,
          "Face"=>"Three",
          "Picture"=>"../assets/spades/3.png"),
          array("Suite"=>"Spades",
          "Value"=>4,
          "Face"=>"Four",
          "Picture"=>"../assets/spades/4.png"),
          array("Suite"=>"Spades",
          "Value"=>5,
          "Face"=>"Five",
          "Picture"=>"../assets/spades/5.png"),
          array("Suite"=>"Spades",
          "Value"=>6,
          "Face"=>"Six",
          "Picture"=>"../assets/spades/6.png"),
          array("Suite"=>"Spades",
          "Value"=>7,
          "Face"=>"Seven",
          "Picture"=>"../assets/spades/7.png"),
          array("Suite"=>"Spades",
          "Value"=>8,
          "Face"=>"Eight",
          "Picture"=>"../assets/spades/8.png"),
          array("Suite"=>"Spades",
          "Value"=>9,
          "Face"=>"Nine",
          "Picture"=>"../assets/spades/9.png"),
          array("Suite"=>"Spades",
          "Value"=>10,
          "Face"=>"Ten",
          "Picture"=>"../assets/spades/10.png"),
          array("Suite"=>"Spades",
          "Value"=>11,
          "Face"=>"Jack",
          "Picture"=>"../assets/spades/11.png"),
          array("Suite"=>"Spades",
          "Value"=>12,
          "Face"=>"Queen",
          "Picture"=>"../assets/spades/12.png"),
          array("Suite"=>"Spades",
          "Value"=>13,
          "Face"=>"King",
          "Picture"=>"../assets/spades/13.png"),
          
    );
    echo '<img src="$cards[0]["Picture"]">';
    
    return $cards;
}
    $players = array(
    array("Name"=>"John",
        "Image" => "../assets/players/face1.png"),
    array("Name"=>"Joe",
        "Image"=> "../assets/players/face2.png"),
    array("Name" => "Jane",
        "Image"=>"../assets/players/face3.png"),
    array("Name" => "Jerry",
        "Image"=> "../assets/players/face3.png"),
    
    );
    $table = [];
$deck=$cards;

//var_dump($deck);
//shuffle($deck);
//var_dump($deck);












?>
<html>

<head>
     
      
    <title> </title>
</head>

<body>
    <? php 
    
    
    
   

    
    ?>

</body>

</html>
