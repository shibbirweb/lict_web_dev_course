

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "PHP Learning"; ?></title>
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="full_container">
            <div class="header_area">
                <?php echo "<h3>PHP Learning</h3>"; ?>
            </div>

            <div class="menu_area">
                <ul>
                    <li> <a href=""><?php echo "Home"; ?></a> </li>
                    <li> <a href=""> Contact </a> </li>
                    <li> <a href=""> About Us </a> </li>
                </ul>
            </div>

            <div class="container">
                <div class="our_cont">
                    <h3> Our code goes here....  </h3>        
                    <?php
                    echo "Hello Guys!!!";
                    //Data Type:
                    //// 1. Integer
                    //// 2. Float
                    //// 3. String
                    //// 4. Boolean
                    //// 5. Array
                    //// 6. Object
                    //// 7. Null
                    //// 8. Resource
                    //// 1.Integer
                    echo "</br>";
                    echo "</br>";
                    echo "<h1>";
                    echo "Our Data types: ";
                    echo "</h1>";
                    echo "</br>";
                    $a = 10;
                    //// 2.Float
                    var_dump($a);
                    $b = 10.78;
                    echo "</br>";
                    $c = $a + $b;
                    $vr = "The total number is: " . $c;
                    echo "$vr";
                    echo "</br>";
                    var_dump($b);
                    echo "</br>";
                    $str = "You are doing good!";
                    var_dump($str);
                    echo "</br>";
                    //// 3.Boolean
                    $amr_var = true;
                    $x = 10;
                    $y = 20;
                    $x == $y;
                    var_dump($x == $y);
                    echo "</br>";
                    //// 4.Array
                    $arr = array("Antu", "Tarpan", "Aulad");
                    print_r($arr['2']);
                    echo "</br>";

                    class OurPHP {

                        public $a = 10;
                        public $b = 20;

                        public function addition() {
                            $c = $this->a;
                            $d = $this->b;
                            echo $x = $c + $d;
                        }

                    }

                    $ourphp = new OurPHP();
                    $ourphp->addition();
                    echo "</br>";
                    //// 5.Null
                    $amar_nl = null;
                    var_dump($amar_nl);
                    echo "</br>";
                    //Arithmatics Operator
                    /*
                     * +
                     * -
                     * /
                     * *
                     * % MOdulas
                     * ++ Increment | Pre-increment & post-incerement
                     * -- Decrement | Pre-decrement & post-decrement
                     */
                    $x = 10;
                    $y = 3;
                    $z = $x % $y;
                    echo $z;
                    echo "</br>";
                    //echo $x++;
                    echo "</br>";
                    //echo $x;
                    echo "</br>";
                    // echo ++$x;
                    echo $x--;
                    echo "</br>";
                    echo --$x;
                    echo "</br>";

                    /*
                     * Assignment Operator
                     * =
                     * +=
                     * -=
                     * /=
                     * *=
                     * %=
                     * .=
                     */
                    $x = 8;
                    $y = 3;
                    $x += $y; //$x = $x + $y;
                    echo $x;
                    echo "</br>";
                    $x %= $y; //11/3
                    echo $x;
                    echo "</br>";
                    /*
                     * Comparison Operator
                     * == (Check only value)
                     * === Identical (Type & value)
                     * !=  Not equal
                     * <
                     * >
                     * <=
                     * >=
                     */
                    $x = 40;
                    $y = '10';
                    var_dump($x != $y);
                    echo "</br>";
                    /*
                     * Logical Operator
                     * AND  --- &&
                     * OR --- ||
                     */
                    //Conditional Statement
                    /* if(condition){
                      //execition
                      }
                     */
                    if ($x > 30) {
                        //execition
                        echo "The number is " . $x . " and greater than 30";
                    } elseif ($x > 20) {
                        echo "The number is " . $x . " and greater than 20";
                    } elseif ($x > 10) {
                        echo "The number is " . $x . " and greater than 10";
                    } else {
                        echo "The number is " . $x;
                    }
                    echo "</br>";
                    //Constant
                    //define("Name", "Value", "case-insensitive");
                    define("TITLE", "Our Site Title", true);
                    echo TiTLE;
                    echo "</br>";
                    $vr = "Android";
                    switch ($vr) {
                        case "Java";
                            echo "I love java";
                            break;

                        case "Android";
                            echo "I love to play android games";
                            break;
                        default:
                            echo 'I love programming';
                    }
                    echo '<br/>';

                    for ($i = 30; $i <= 30 && $i > 0; $i--) {
                        echo "The number is: " . $i . "<br />";
                    };

                    //Looping

                    for ($i = 1; $i <= 10; $i++) {
                        echo $i . "<br />";
                    }
                    //Array
                    //1. Indexing array
                    //2. Associative array
                    //3. Multi-Dimensional Array
                    $car = array("McLarine", "BMW", "TATA", "TOYOTA");
                    echo $car['0'];
                    echo "<pre>";
                    print_r($car);
                    echo "</pre>";

                    $carLength = count($car);
                    //echo $carLength;
                    for ($i = 0; $i < $carLength; $i++) {
                        echo $car[$i] . ", ";
                    }
                    echo "<br />";
                    //Example 
                    $color = array("Begoni,", "Nil,", "Asmani,", "Shoboj,", "Komola,", "Lal,", "Sada");
                    $colorLength = count($color);
                    for ($j = 0; $j < $colorLength; $j++) {
                        echo $color[$j] . " ";
                    }
                    echo "<br />";
                    $name = array("Shibbir", "Ahmed", "Raihan", "Rizwan");
                    $nameLength = count($name);
                    for ($i = 0; $i < $nameLength; $i++) {
                        echo "Your name " . $name[$i] . "<br />";
                    }
                    //2. Associative Array

                    $pc = array("Mouse" => "A4Tech", "Keyboard" => "Dell", "Scanner" => "Canon");
                    echo("<pre>");
                    print_r($pc);
                    echo ("</pre>");
                    echo $pc['Keyboard'];
                    echo "<br ?>";
                    foreach ($pc as $keys => $values) {
                        echo "<span style='font-size: 25px;'>Input Device ".$keys." "."and Brand Name ". $values."</span><br />"; 
                    }
                    
                    
                    
                    $food = array("Fast Food" => "Burger", "Soft Drink" => "Pepsi", "Water" => "Mum", "Salad" => "Cucumber");
                    foreach ($food as $foodtype => $names){
                        echo "<span style ='font-size: 30px;color: green; font-family: Verdana;line-height: 25px;'>Food ".$foodtype." Which is ". $names."</span><br />";
                    }
                    
                    $person = array(
                        "Name" => "Shibbir Ahmed", 
                        "E-mail" => "shibbirgfn@gmail.com", 
                        "Age" => "22 years", 
                        "Height" => "5 feet 7.5 inches",
                        "Depertment" => "Mathematics", 
                        "College" => "Ananda Mohan College", 
                        "Nationality" => "Bangladeshi",
                        );
                    foreach($person as $key => $value){
                             echo "<span style='font-size:30px; color:#000; font-famliy: Tahoma; line-height: 30px;'>". $key ." : ".$value."</span><br />";                   
                    }
                    echo "<br />";
                    
                    // 3.Multi-Dimentional Array
                        $multi_arr = array(
                            array("Aulad", "25", "72"),
                            array("Robin", "23", "62"),
                            array("Amit", "23", "57"),
                            array("Mostak", "23", "60"),
                            array("Shoriful", "24", "80")
                        );
                        //echo $multi_arr['4']['1'];
                        for($row=0; $row<5; $row++){
                            echo "The Row number is: $row";
                            echo "<ul>";
                            for($col=0; $col<3; $col++){
                                echo "<li>".$multi_arr[$row][$col]." </li>";
                            }
                            echo "</ul>";
                        }
                    
                    
                    ?>



                </div>

            </div>

            <div class="footer_area">
                <h3> All Right Right Reserved </h3>
            </div>
        </div>
    </body>
</html>