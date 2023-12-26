<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1><?php echo "hello World<br><br>"; ?></h1>
    <?php echo "<h1>Hello Wotld<br><br></h1>" ?>
    <?php $var_a = "SE CAMP" ?>
    <?php echo $var_b = 'Hello $var_a' ?>
    <br>
    <?php echo $var_c = "Hello $var_a" ?>
    <br>
    <?PHP
 // Scope GLOBAL
    $x = 4;
    function assignx () {
 // Scope LOCAL
    $x = 0;
    print "\$x inside function is $x. <br />";
    GLOBAL $x; // Decare to use GLOBAL
    print "\$x (2) inside function is $x. <br />";
 // STATIC
    STATIC $a = 0;
    $a++;
     echo "\$a is $a\n";
     echo "<br><br>";
    }
    assignx();
    assignx();
    assignx();
    print "\$x outside of function is $x. <br />";
    ?>
    <br>
    <?php
    $var_c = $var_b = 2;
    $var_c = '1';
    echo $var_b <=> $var_c;
    echo "<br>";
    if($var_b === $var_c){
        //true
        echo '$var_b === $var_c';
    }elseif($var_b <> $var_c){
        //true
        //ไม่เท่ากับ
        echo '$var_b <> $var_c';
    }else{
        //false
        echo 'false';
    }
    ?>

    <br>
    <?php echo $var_c = 2; ?>
    <br>
    <?php echo $var_c; ?>
    <br>
    
    <?php echo $var_c;
    echo "<br>";
    switch($var_c){
        case "1":
            echo "1";
            break;
        default:
            echo "test";
    }

    $array = array(1,2,3);
    $array1 = [1,2,3];//{}
    $array2[] = 1;
    $array2[] = 2;
    $array2[] = 3;
    $array2[] = "Hello";
    $array2['SE'] = "World";
    ?>
    <?php pre($array2); ?>
    <?php print_r($array); ?>
    <pre><?php print_r($array); ?> </pre>
    <pre><?php print_r($array1); ?> </pre>
    <pre><?php print_r($array2); ?> </pre>

    <?php for($i = 0; $i < count($array2); $i++){ ?>
    <h3><?php echo $array2[$i]; ?></h3>
    <?php } ?>

    <?php foreach($array2 as $value){ ?>
    <h3>
        :<?php echo $value; ?>
    </h3>
    <?php } ?>
    
    <?php
    function pre($value){
        echo "<pre>";
        print_r($value);
        echo"</pre>";
    } ?>


</body>

</html>