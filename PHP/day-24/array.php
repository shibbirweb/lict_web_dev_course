<?php
session_start();
include_once 'header.php';
?>
<h3>OF day 24</h3>
<?php

    echo "<hr />";
    echo "Array Combine";
    echo "<hr />";
    $array1 = array("Rezaul", "Tarpan", "Amit");
    $array2 = array("rez@gmail.com", "tar@gmail.com", "amit@gmial.com");
    function add($a, $b){
        $c = $a + $b;
        return $c;
    }
    $x = 20;
    $y= 80;
    echo add($x, $y);
    $comb = array_combine($array1, $array2);
    
    $arr = array(
        "Rana" => "30",
        "Sumaiya" => "20",
        "Juton" => "20"
    );
    foreach($arr as $mouse => $keyboards){
        echo $mouse . " and his age is: ".$keyboards .", <br/>";
    }
    echo "<hr />";
    echo "<pre>";
    print_r($comb);
    echo "<hr />";
    echo "Array Merge";
    echo "<hr />";
    $x = array("a" => "White", "b" => "Blue");
    $y = array("c" => "Black", "d" => "red");
    $z = array_merge($x, $y);
    
    print_r($z);
    echo "<hr />";
    echo "Array Merge Recursive";
    echo "<hr />";
    $a1 = array("a" => "red", "b" => "green");
    $b1 = array("c" => "blue", "b" => "red");
    $merge_rec = array_merge_recursive($a1, $b1);
    print_r($merge_rec);
    echo "<hr />";
    echo "Array Unshift";
    echo "<hr />";
    $unshift = array("a" => "red", "b" => "green");
    array_unshift($unshift, "blue");
    print_r($unshift);
    echo "<hr />";
    echo "Array pop";
    echo "<hr />";
    $pop = array("red", "green", "blue");
    array_pop($pop);
    print_r($pop);
    echo "<hr />";
    echo "Array Push";
    echo "<hr />";
    $push = array("red", "green");
    array_push($push, "blue", "green");
    print_r($push);
        echo "<hr />";
    echo "Array Pad";
    echo "<hr />";
    $pad = array("red", "green");
    print_r(array_pad($pad, 5,"blue"));
    echo "</pre>";
    
     
?>
<?php
include_once 'footer.php'
?>